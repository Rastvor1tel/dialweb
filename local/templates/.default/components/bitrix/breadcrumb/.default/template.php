<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (count($arResult) < 2) return;
$strReturn = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';
$count = count($arResult);
foreach($arResult as $key => $arItem)
	if ($key + 1 < $count)
		$strReturn .= '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$arItem["LINK"].'" itemprop="item" class="breadcrumbs__item"><span itemprop="name">'.$arItem["TITLE"].'</span></a><meta itemprop="position" content="'.($key+1).'"></span>';
	else
		$strReturn .= '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="breadcrumbs__item _active">'.$arItem["TITLE"].'</span><meta itemprop="position" content="'.($key+1).'"></span>';
$strReturn .= '</div>';
return $strReturn;
?>