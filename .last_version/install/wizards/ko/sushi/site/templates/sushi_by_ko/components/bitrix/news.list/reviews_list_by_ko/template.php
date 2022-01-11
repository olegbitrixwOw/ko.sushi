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
<div class="advantages container">
	<h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/reviews_title.php"), false);?>  </h3>
		<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-lg-4 col-md-4  col-sm-6 col-xs-12">
					<div class="review_item">
						<?if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])){?>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
						<?}else{?>
							<img src="<?=SITE_TEMPLATE_PATH?>/images/no_image.png">
						<?}?>
						
						<p><?echo $arItem["NAME"]?></p>
						<p><?=GetMessage("DATE_TEXT_KO")?> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
						<p><?=TruncateText($arItem["PREVIEW_TEXT"], 184);?></p>
						</div>		
				</div>
				
			<?endforeach;?>
		</div>
</div>