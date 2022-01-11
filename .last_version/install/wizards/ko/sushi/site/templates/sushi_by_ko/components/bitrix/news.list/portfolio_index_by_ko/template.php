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
<div class="container-fluid">				
	<div class="advantages">
	
		<div class="row"> 
			<div class="container">
				<h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/portfolio_title.php"), false);?>  
				<span class="reviews_link"><a href="<?SITE_DIR?>/portfolio/"><?=GetMessage("PORTFOLIO_DETAIL_KO")?></a></span>
				</h3>
			</div>
			<div class="row slider2" >
					
						<?foreach($arResult["ITEMS"] as $arItem):?>
							<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>
							<?
								$arFileTmp = CFile::ResizeImageGet(
									$arItem["PREVIEW_PICTURE"],
									array("width" => 483, "height" => 381),
									BX_RESIZE_IMAGE_EXACT,
									true,
									$arWaterMark
								);
							?>
							<div class="item col-lg-3 col-md-4  col-sm-6 col-xs-12 col-work">
							   <div class="item_work portfolio">
									<a class="fancybox" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" rel="group">
										<img width="483px" height="381px" src="<?=$arFileTmp["src"]?>">
									</a>
									<p class="name" style="   "><a class="href"  href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></p>
								</div>
							</div>	
						<?endforeach;?>
					
				</div>
		</div>
	
	</div>
</div>	

