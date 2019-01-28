<? require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

header('Content-Type: application/xml; charset=utf-8');

use Bitrix\Main\Loader; 
Loader::includeModule('iblock'); 
//include_once('classes/phpQuery.php');

function turboContent($content){
	$turboContent = preg_replace('/<([^img|a|iframe|^\/].*?)(| .*?)>/', '<$1>', $content);
	$turboContent = preg_replace('/&nbsp;|<\/?br>/', '', $turboContent);
	$turboContent = preg_replace('/(<\/?)div>/', '$1p>', $turboContent);
	$turboContent = preg_replace('/<img(.*?) src="(.*?)" (.*?)>/', '<figure><img src="https://'.$_SERVER['HTTP_HOST'].'$2"></figure>', $turboContent);
	return	$turboContent;
}

/*function staticContent($link, $dom){
	$content = file_get_contents($link);
	$document = phpQuery::newDocument($content);
	$result = $document->find($dom);
	return $result->html();
}*/

$siteUrl = 'https://'.$_SERVER['HTTP_HOST'];
$items = CIBlockElement::GetList(
	Array(
		'active_from' => 'desc'
	),
	Array(
		'IBLOCK_ID' => Array(6,	10),
		'ACTIVE_DATE' => 'Y',
		'ACTIVE' => 'Y'
	),
	false,
	false,
	Array(
		'NAME',
		'PREVIEW_PICTURE',
		'DETAIL_PAGE_URL',
		'DETAIL_TEXT'
	)
);

//echo turboContent(staticContent($siteUrl.'/price/index.php', 'div.price'));


echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss
	xmlns:yandex="http://news.yandex.ru"
	xmlns:media="http://search.yahoo.com/mrss/"
	xmlns:turbo="http://turbo.yandex.ru"
	version="2.0"
>
	<channel>
		<?while($item = $items->GetNext()) {
			$img = CFile::ResizeImageGet($item['PREVIEW_PICTURE'], array('width'=>320, 'height'=>320), BX_RESIZE_IMAGE_PROPORTIONAL, true);

			$turboContent = turboContent($item['DETAIL_TEXT']);
			?>
			<item turbo="true">
				<link><?=$siteUrl.$item['DETAIL_PAGE_URL']?></link>
				<turbo:content>
					<![CDATA[
						<header>
							<?=$img['src']?'<figure><img src="'.$siteUrl.$img['src'].'" /></figure>':''?>
							<h1><?=$item['NAME']?></h1>
						</header>
						<?=$turboContent?>
					]]>
				</turbo:content>
			</item>
		<?}?>
	</channel>
</rss>