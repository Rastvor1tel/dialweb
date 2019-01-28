<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!isset($arParams["CACHE_TIME"]))
{
    $arParams["CACHE_TIME"] = 3600;
}

if ($USER->IsAdmin())
    $userRight = "admin";
else
    $userRight = "not_admin";

CJSCore::Init(array("jquery", "popup"));

CPageOption::SetOptionString("main", "nav_page_in_session", "N");

if (!CModule::IncludeModule("iblock"))
{
    $this->AbortResultCache();
    ShowError("IBLOCK MODULE IS NOT INSTALLED");
    return;
}

$arResult = array(
  'ID'=>'',
  'PAGE' => '',
  'TITLE' => '',
  /* 'ROBOTS' => '', */
  'DESCRIPTION' => '',
  'KEYWORDS' => '',
);

/* PAGE URL */
$full_domen = ltrim(str_replace('http://', '', $_SERVER["HTTP_HOST"]));
$domen = ltrim(str_replace('http://', '', $_SERVER["HTTP_HOST"]), 'www.');
$reg = explode(".", $domen);
$asd = '';
if (count($reg) == 2)
{//if first lvl
    $region = '';
    $asd = $full_domen; //www.site.ru
}
else
{
    $region = $reg[0]; //moscow
}
$path = (stristr($APPLICATION->GetCurUri(false),'SMART_FILTER_PATH')) ? trim($APPLICATION->GetCurUri(false)) : trim($APPLICATION->sDirPath);

$curPage = $full_domen . $path;
/* PAGE URL END */

if (isset($_REQUEST['wfSeoEditSave']) && $_REQUEST['wfSeoEditSave'] == 'Y' and $userRight == "admin")
{
    $element = new CIBlockElement;

    if (isset($_REQUEST['PageUrl']) && (strlen($_REQUEST['PageUrl']) > 0))
        $curPage = $_REQUEST['PageUrl'];

    $Title = (isset($_REQUEST['PageTitle'])) ? $_REQUEST['PageTitle'] : '';
    /* $Robots = (isset($_REQUEST['PageRobots'])) ? $_REQUEST['PageRobots'] : ''; */
    $Description = (isset($_REQUEST['PageDescription'])) ? $_REQUEST['PageDescription'] : '';
    $KeyWords = (isset($_REQUEST['PageKeywords'])) ? $_REQUEST['PageKeywords'] : '';

    /* ����� ������ �� ��������� */
    $arSelect = Array(
      "ID",
      "IBLOCK_ID"
    );
    
    $arFilter = Array("IBLOCK_CODE" => 'dial_seo', "ACTIVE" => "Y", "NAME" => $curPage);

    $res = $element->GetList(Array(), $arFilter, false, false, $arSelect)->fetch();

    $PROP = array();
    $PROP["META_TITLE"] = $Title;
    /* $PROP["META_ROBOTS"] = $Robots; */
    $PROP["META_DESCRIPTION"] = $Description;
    $PROP["META_KEYWORDS"] = $KeyWords;

    $arFields = Array(
      "NAME" => $curPage,
      "PROPERTY_VALUES" => $PROP,
    );

    //update
    if (!empty($res))
    {
        $element->Update($_REQUEST['PageId'], $arFields);
        $elementID = $_REQUEST['PageId'];
        $iblockID = $res["IBLOCK_ID"];
        unset($PROP);
    }
    //add
    else
    {
        //get IBLOCK ID
        $res = CIBlock::GetList(
                Array(), Array(
              'CODE' => 'dial_seo',
              'ACTIVE' => 'Y',
                ), true
        );
        while ($ar_res = $res->Fetch()) {
            $iblockID = $ar_res['ID'];
        }

        $arFieldsDop = Array(
          "IBLOCK_ID" => $iblockID
        );
        $arFields = array_merge($arFields, $arFieldsDop);

        $elementID = ($element->Add($arFields));
        unset($PROP);
    }

    $this->clearResultCache(array($curPage, SITE_ID, $userRight));
    
    if (isset($_REQUEST['save_and_to_admin']))
    {
        LocalRedirect("/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $iblockID . "&type=secondary&ID=" . $elementID . "&lang=" . LANGUAGE_ID . "&find_section_section=0&WF=Y");
    }

}

$arResult['PAGE'] = $curPage;

if ($this->StartResultCache(false, array($curPage, SITE_ID, $userRight)))
{
    $arSelect = Array(
        "ID",
        "IBLOCK_ID",
        "NAME",
        "PROPERTY_META_TITLE",
        /* "PROPERTY_META_ROBOTS", */
        "PROPERTY_META_DESCRIPTION",
        "PROPERTY_META_KEYWORDS",
    );

    $arFilter = Array("IBLOCK_CODE" => 'dial_seo', "ACTIVE" => "Y", "NAME" => $curPage);

    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($arSeo = $res->Fetch())
    {
        $arResult["ID"] = $arSeo["ID"];
        $arResult["PAGE"] = $arSeo["NAME"];
        
        if (!empty($arSeo["PROPERTY_META_TITLE_VALUE"]))
        $arResult["TITLE"] = $arSeo["PROPERTY_META_TITLE_VALUE"];
        
        /* if (!empty($arSeo["PROPERTY_META_ROBOTS_VALUE"]))
        $arResult["ROBOTS"] = $arSeo["PROPERTY_META_ROBOTS_VALUE"]; */
        
        if (!empty($arSeo["PROPERTY_META_DESCRIPTION_VALUE"]))
        $arResult["DESCRIPTION"] = $arSeo["PROPERTY_META_DESCRIPTION_VALUE"];
        
        if (!empty($arSeo["PROPERTY_META_KEYWORDS_VALUE"]))
        $arResult["KEYWORDS"] = $arSeo["PROPERTY_META_KEYWORDS_VALUE"];
    };


    unset($seoFields);

    $this->SetResultCacheKeys(array(
      "ID",
      "TITLE",
      /* "ROBOTS", */
      "KEYWORDS",
      "DESCRIPTION",
    ));

    $this->IncludeComponentTemplate();
}
?>