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
 <div class="container-fluid slider">
	<div class="row">
		<div class="col-lg-12 col hidden-xs">
		<ul class="bxslider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$arFileTmp = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"],
					array("width" => 2000, "height" => 400),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
			?>
				<li>
					<div class="carousel-caption">
						
								
								<p> <a href="#" class="callback call_master_btn"><?=GetMessage("CALL_MASTER_BTN_KO")?></a>
								
								</p>
					</div>
					<a href="<?=SITE_DIR?><?=$arItem["CODE"]?>" >
						<img src="<?=$arFileTmp["src"]?>" alt="<?=$arItem["NAME"]?>">
					</a>
				</li>
			<?endforeach;?>					

		</ul>
		</div>
	</div>
</div>
