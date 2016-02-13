<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Make all properties present in order
//to prevent html table corruption
$arResult["SECTION_LIST"] = array();
foreach($arResult["ITEMS"] as $key => $arElement)
{
    $res = CIBlockSection::GetByID($arElement["IBLOCK_SECTION_ID"]);
    if($ar_res = $res->GetNext())
        $arResult["SECTION_LIST"][$arElement["IBLOCK_SECTION_ID"]] = $ar_res;
}
?>