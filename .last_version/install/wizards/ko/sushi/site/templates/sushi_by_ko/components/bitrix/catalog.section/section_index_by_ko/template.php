<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="section">
	<?
	$i = 0;
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{
		$i++;
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
		$strMainID = $this->GetEditAreaId($arItem['ID']);
		//print_r($arItem);
		$arFileTmp = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"]["ID"],
            array("width" => 139, "height" => 140),
            BX_RESIZE_IMAGE_EXACT,
            true,
            $arWaterMark
        );
		
		$arFileTmp2 = CFile::ResizeImageGet(
            $arItem["DETAIL_PICTURE"]["ID"],
            array("width" => 600, "height" => 600),
            BX_RESIZE_IMAGE_EXACT,
            true,
            $arWaterMark
        );
	?>
	<? //if($USER->IsAdmin()) {echo '<pre>'; print_r($arItem); echo '</pre>';} ?>
	<div class="col-lg-3">
		<div class="item">
			<div class="img"><a href="<?=$arFileTmp2["src"]?>" rel="group<?=$i?>" class="fancybox"><img src="<?=$arFileTmp["src"]?>" width="139" height="140"></a></div>
			<div class="hit"></div>
			<div class="hot"></div>
			<div class="new"></div>
			<div class="name"><?=$arItem["NAME"]?></div>
			<div class="text" title="<?=$arItem["PREVIEW_TEXT"]?>"><?=TruncateText($arItem["PREVIEW_TEXT"], 45)?></div>
			
				<?if (!empty($arItem["PROPERTIES"]["VES"]["VALUE"])):?>
					<div class="prop">
					<?	echo $arItem["PROPERTIES"]["VES"]["NAME"];
						echo ": ";
						echo $arItem["PROPERTIES"]["VES"]["VALUE"];?>
					</div>
				<?endif;
				?>
		
			<div class="count"><?=GetMessage("COUNT_PORC")?>: <input type="text" value="1"></div>
			<?if (!empty($arItem["PROPERTIES"]["PRICE"]["VALUE"])):?>
					<div class="price">
					<?	//echo $arItem["PROPERTIES"]["PRICE"]["NAME"];
						//echo ": ";
						echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];?>
						<span class="icon_cart"></span><a class="callback zakaz_product_btn" p_product="<?=$arItem["NAME"]?>"><?=GetMessage("BTN_ZAKAZ")?></a>
					</div>
			<?endif;
			?>
			
			
		</div>
	</div>

	<?}?>
</div>
<div class="clear"></div>
<hr>