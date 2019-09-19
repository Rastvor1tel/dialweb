<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?$APPLICATION->ShowTitle()?> - Digital Agency Dial</title>
<?
$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&display=swap&subset=cyrillic');
$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/css/normalize.css');
$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/libs/swiper/swiper.min.css');
$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/css/common.css');
$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/css/style.css');
$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/libs/fancybox/jquery.fancybox.min.css');
if (SITE_TEMPLATE_ID != 'dial') {
	$APPLICATION->SetAdditionalCSS(TEMPLATE_PATH . '/../template_styles.css');
}
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/libs/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/libs/inputmask.js');
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/libs/svg4everybody.min.js');
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/libs/fancybox/jquery.fancybox.min.js');
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/libs/swiper/swiper.min.js');
$APPLICATION->AddHeadScript(TEMPLATE_PATH . '/js/script.js');
$APPLICATION->ShowHead();
/*use \Bitrix\Main\Service\GeoIp;
$ipAddress = GeoIp\Manager::getRealIp();
$resultGeo = GeoIp\Manager::getDataResult($ipAddress, "ru");*/
?>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta name="theme-color" content="#fe9023">
<meta name="HandheldFriendly" content="True"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<?
$APPLICATION->SetPageProperty('ogType', 'website');
$APPLICATION->SetPageProperty('ogImage', 'https://dialweb.ru/local/templates/dial/template/img/logo.png');
?>
<meta property="og:url" content="https://<?=SITE_SERVER_NAME . $APPLICATION->GetCurPage()?>">
<meta property="og:type" content="<?$APPLICATION->ShowProperty("ogType")?>">
<meta property="og:title" content="<?$APPLICATION->ShowTitle();?>">
<meta property="og:description" content="<?$APPLICATION->ShowProperty("description")?>">
<meta property="og:image" content="<?$APPLICATION->ShowProperty("ogImage")?>">

<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"7df90b567603575ec8a6c40fa3cd7180695","metrics":{"metrika":"199858"}});});})(window, "zTrackerCallbacks");</script>
<script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js"></script<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '754599888292602');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1"
         src="https://www.facebook.com/tr?id=754599888292602&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
