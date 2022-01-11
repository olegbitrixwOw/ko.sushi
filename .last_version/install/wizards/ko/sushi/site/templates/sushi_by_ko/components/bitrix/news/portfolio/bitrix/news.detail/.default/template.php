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
<div class="news-detail">
	<?foreach ($arResult["PROPERTIES"]["DOP_PHOTO"]["VALUE"] as $value): //echo $value?>
	<?
		 $arFileTmp = CFile::ResizeImageGet(
            $value,
            array("width" => 640, "height" => 480),
            BX_RESIZE_IMAGE_EXACT,
            true,
            $arWaterMark
        );
		$img = CFile::GetPath($value);
	?>
		<a class="fancybox" rel="group" href="<?=$img?>">
			<img src="<?=$arFileTmp["src"]?>">
		</a><br/><br/>
		
	<?endforeach;?>
</div>