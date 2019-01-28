<?
//Получаем расширение файла
function getExtension($str){
    return substr(strrchr($str, '.'), 1);
}
//Работа с встроенной графикой
function getEnclosure($text, $name = '',$site = 'https://dialweb.ru'){
    //Формируем массив картинок в тексте
    preg_match_all('/<img[^>]+>/i',$text,$tags);
    foreach ($tags[0] as $key => $img_tag) {
         // preg_match_all('/(alt|title|src)=("[^"]*")/i',$img_tag, $img);
        // preg_match_all('/(src)=("[^"]*")/i',$img_tag, $img);

        preg_match_all('/<img[^>]*?src=["\']?([^"\'\s>]+)["\']?[^>]*?>/is', $img_tag, $img);
        $src = $img[1][0];
        //Собираем в массив inks ссылки
        $links[] = 'https://dialweb.ru'.$src;
         // $src = $img[0];
        $figcaption = '<figure>
        <img src="'.$site.$src.'">
        <figcaption>'.$name.'</figcaption>
        </figure>';
        //замена всех вхождений картинок в тексте на нужный формат
        $text = str_replace($img_tag,$figcaption,$text);
    }
    //Формируем массив картинок/расширнений
    foreach ($links as $key => $link) {
        $images[] = [$link,getExtension($link)];
    }
    return ['FORMATTED_TEXT'=>$text, 'ENCLOSURE'=>$images];
}
//Отключаем статистику Bitrix
define("NO_KEEP_STATISTIC", true);
//Подключаем движок
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//устанавливаем тип ответа как xml документ
header('Content-Type: application/xml; charset=UTF-8');
if(CModule::IncludeModule("iblock"))
{

    $arFilter= ["IBLOCK_ID" => 6, "ACTIVE" => "Y"];
    $arOrder = ['active_from' => 'DESC'];
    $arSelect = ['NAME','PROPERTY_TAGS','DETAIL_PAGE_URL','PREVIEW_TEXT','DETAIL_TEXT','DATE_CREATE_UNIX', 'PREVIEW_PICTURE'];
    $res = CIBlockElement::GetList($arOrder, $arFilter,false, array("nTopCount" => 25), $arSelect);
    while($ar_fields = $res->GetNext())
    {
        $ar_fields['ADDITIONAL'] = getEnclosure($ar_fields['DETAIL_TEXT'], $ar_fields['NAME']);
        $ar_fields['PREVIEW_PICTURE'] = CFile::GetFileArray($ar_fields['PREVIEW_PICTURE']);
        $newsArray[] = $ar_fields;
    }
    // echo "<pre>";
    // print_r($newsArray);
}
?>
<?echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:media="http://search.yahoo.com/mrss/"
xmlns:atom="http://www.w3.org/2005/Atom"
xmlns:georss="http://www.georss.org/georss">
    <channel>
        <title>Digital Agency Dial</title>
        <link>https://dialweb.ru/</link>
        <description>
            ВСЕ САМОЕ ИНТЕРЕСНОЕ ИЗ ЖИЗНИ КОМПАНИИ. МЫ ПУБЛИКУЕМ СТАТЬИ, ИССЛЕДОВАНИЯ, НОВОСТИ РЫНКА И КОНТЕКСТНОЙ РЕКЛАМЫ.
        </description>
        <language>ru</language>
        <?foreach ($newsArray as $key => $item): ?>
            <item>
                <title><?=$item['NAME']?></title>           
                <link>https://dialweb.ru<?=$item['DETAIL_PAGE_URL']?></link>
                <media:rating scheme="urn:simple">nonadult</media:rating>
                <pubDate><?=date(DATE_RFC822,$item['DATE_CREATE_UNIX'])?></pubDate>
                    <?if($item['PROPERTY_TAGS_VALUE']):?>
                        <category><?=$item['PROPERTY_TAGS_VALUE']?></category>
                    <?endif;?>
                <enclosure url="https://dialweb.ru<?=$item['PREVIEW_PICTURE']['SRC']?>" type="<?=$item['PREVIEW_PICTURE']['CONTENT_TYPE']?>"/>
                <?foreach($item['ADDITIONAL']['ENCLOSURE'] as $key => $enclosure):?>
                    <enclosure url="<?=$enclosure[0]?>" type="image/<?=$enclosure[1]?>"/>
                 <?endforeach?>
                <description>
                    <![CDATA[<?=$item['PREVIEW_TEXT']?>]]>
                </description>
                <content:encoded>
                    <![CDATA[
                        <?=$item['ADDITIONAL']['FORMATTED_TEXT']?>
                    ]]>
                </content:encoded>
            </item>
        <?endforeach ?>
    </channel>
</rss>
