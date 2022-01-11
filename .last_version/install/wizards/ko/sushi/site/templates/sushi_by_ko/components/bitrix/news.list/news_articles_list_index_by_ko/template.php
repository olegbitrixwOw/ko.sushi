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
		
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="new">
					<? $arFileTmp = CFile::ResizeImageGet(
							$arItem["PREVIEW_PICTURE"],
							array("width" => 205, "height" => 120),
							BX_RESIZE_IMAGE_EXACT,
							true,
							$arWaterMark
						);
					?>
					<?
						//print_r($arItem);
					?>
					<p>
					   <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"> <img src="<?=$arFileTmp["src"]?>" alt=""></a>
					</p>
					<p class="date"><?=$arItem["ACTIVE_FROM"]?></p>
					<p class="name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></p>
					<a class="detail" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("DETAIL_BTN_KO")?></a>
					<hr>
				</div>
				
				
			<?endforeach;?>					

		
		</div>
	</div>
</div>
