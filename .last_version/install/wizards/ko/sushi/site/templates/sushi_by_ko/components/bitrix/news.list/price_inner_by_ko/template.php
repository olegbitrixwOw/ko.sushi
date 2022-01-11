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
<div class="table-responsive"> 
<table class="table table-bordered">
    <thead>
        <tr>
           
            <th><?=GetMessage("SERVICE_TEXT_KO")?></th>
			<th><?=GetMessage("AREA_TEXT_KO")?></th>
            <th><?=GetMessage("PRICE_TEXT_KO")?></th>
            
        </tr>
    </thead>
    <tbody>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				 <tr>
            
					<td><?echo $arItem["NAME"]?></td>
					<td><?echo $arItem["PREVIEW_TEXT"];?></td>
					<td><?echo $arItem["DETAIL_TEXT"];?></td>
					
					
				</tr>
				
			<?endforeach;?>
 </tbody>
</table>
</div>