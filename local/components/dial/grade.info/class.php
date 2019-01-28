<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;
use \Bitrix\Main\Localization\Loc as Loc;

class GradeInfo extends \CBitrixComponent
{
	/**
	 * cache keys in arResult
	 * @var array()
	 */
	protected $cacheKeys = [];

	/**
	 * add parameters from cache dependence
	 * @var array
	 */
	protected $cacheAddon = [];

	/**
	 * pager navigation params
	 * @var array
	 */
	protected $navParams = [];

	/**
	 * include lang files
	 */
	public function onIncludeComponentLang()
	{
		$this->includeComponentLang(basename(__FILE__));
		Loc::loadMessages(__FILE__);
	}

	/**
	 * prepare input params
	 * @param array $params
	 * @return array
	 */
	public function onPrepareComponentParams($params)
	{
		$params = parent::onPrepareComponentParams($params);
		$params['CACHE_TIME'] = intval($params['CACHE_TIME']) > 0 ? intval($params['CACHE_TIME']) : 3600;

		return $params;
	}

	/**
	 * read data from cache or not
	 * @return bool
	 */
	protected function readDataFromCache()
	{
		if ($this->arParams['CACHE_TYPE'] == 'N') // no cache
			return false;
		return !($this->StartResultCache(3600, $this->cacheAddon));
	}

	/**
	 * cache arResult keys
	 */
	protected function putDataToCache()
	{
		if (is_array($this->cacheKeys) && sizeof($this->cacheKeys) > 0) {
			$this->SetResultCacheKeys($this->cacheKeys);
		}
	}

	/**
	 * abort cache process
	 */
	protected function abortDataCache()
	{
		$this->AbortResultCache();
	}

	/**
	 * check needed modules
	 * @throws Main\LoaderException
	 */
	protected function checkModules()
	{
		if (!Main\Loader::includeModule('iblock'))
			throw new Main\LoaderException(Loc::getMessage('STANDARD_ELEMENTS_LIST_CLASS_IBLOCK_MODULE_NOT_INSTALLED'));
	}

	/**
	 * check required input params
	 * @throws Main\ArgumentNullException
	 */
	protected function checkParams()
	{

		if ($this->arParams['GRADES_IBLOCK_ID'] <= 0)
			throw new Main\ArgumentNullException('GRADES_IBLOCK_ID');
		if ($this->arParams['PERSON_ID'] <= 0)
			throw new Main\ArgumentNullException('PERSON_ID');
	}

	/**
	 * some actions before cache
	 */
	protected function executeProlog()
	{

	}

	/**
	 * @throws Exception
	 * @throws Main\ArgumentException
	 * @throws Main\LoaderException
	 * @throws Main\SystemException
	 */
	protected function getResult()
	{
		$result = array();

		$obSection = CIBlockSection::GetList(
			array(),
			array(
				'XML_ID' => $this->arParams['PERSON_ID'],
				'IBLOCK_ID' => $this->arParams['GRADES_IBLOCK_ID'],
			),
			false,
			array(
				'ID', 'IBLOCK_ID', 'NAME', 'PICTURE', 'UF_RATING', 'UF_TOTAL'
			)
		);

		if ($arSection = $obSection->Fetch()) {

			$rating = $arSection['UF_RATING'];
			$votes = $arSection['UF_TOTAL'];

			$result['RATING'] = round($rating / $votes ,1);
			$result['NAME'] = explode('-', $arSection['NAME'])[0];
			$result['PICTURE'] = $arSection['PICTURE'];
			$page = $_GET['PAGEN_1'] ? $_GET['PAGEN_1'] : 1;

			$obElement = CIBlockElement::GetList(
				array('ID' => 'DESC'),
				array(
					'SECTION_ID' => $arSection['ID'],
					'IBLOCK_ID' => $this->arParams['GRADES_IBLOCK_ID'],
					'ACTIVE' => 'Y'
				),
				false,
				array("nPageSize" => 50, "iNumPage" => $page),
				array('ID', 'IBLOCK_ID', 'IBLOCK_SECTION_ID', 'PREVIEW_TEXT', 'PROPERTY_NAME', 'PROPERTY_RATING', 'PROPERTY_COMPANY')
			);
			//$obElement->NavStart(0);

			while ($arElement = $obElement->Fetch()) {
				
				$result['ITEMS'][] = $arElement;
			}

			$result['PAGE_NAV'] = $obElement->GetPageNavStringEx($navComponentObject, $this->arParams["PAGER_TITLE"], $this->arParams['PAGER_TEMPLATE']);
		}

		$this->arResult = $result;
	}

	/**
	 * some actions after component work
	 */
	protected function executeEpilog()
	{
		global $APPLICATION;
		$APPLICATION->SetTitle('Отзывы о сотруднике '. $this->arResult['NAME']);
	}

	/**
	 * @return mixed|void
	 */
	public function executeComponent()
	{

		try {
			$this->checkModules();
			$this->checkParams();
			$this->executeProlog();
//			if (!$this->readDataFromCache()) {
				$this->getResult();
//				$this->putDataToCache();
				$this->includeComponentTemplate();
//			}
			$this->executeEpilog();
		} catch (Exception $e) {
			$this->abortDataCache();
			ShowError($e->getMessage());
		}
	}
}
