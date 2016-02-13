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
</section>
<div class="catalog-section">

	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>
	<article id="<?=$this->GetEditAreaId($arElement['ID']);?>">
        <p class="dott"><span>&nbsp;</span></p>
        <div>
			<p class="name"><a href="<?=$arResult["SECTION_LIST"][$arElement["IBLOCK_SECTION_ID"]]["SECTION_PAGE_URL"]?><?=$arElement["CODE"]?>/"><?=$arElement["NAME"]?></a></p>
            <p class="section">Рубрика: <a href="<?=$arResult["SECTION_LIST"][$arElement["IBLOCK_SECTION_ID"]]["SECTION_PAGE_URL"]?>"><?=$arResult["SECTION_LIST"][$arElement["IBLOCK_SECTION_ID"]]["NAME"]?></a></p>
		    <p class="date">Создано&nbsp;<?=$arElement["DATE_CREATE"]?></p>

            <div class="text">
                <?=$arElement["PREVIEW_TEXT"];?>
                <p align="right"><a href="<?=$arResult["SECTION_LIST"][$arElement["IBLOCK_SECTION_ID"]]["SECTION_PAGE_URL"]?><?=$arElement["CODE"]?>/">читать далее...</a></p>
            </div>
        </div>
    </article>
	<?endforeach;?>
</div>
<section>