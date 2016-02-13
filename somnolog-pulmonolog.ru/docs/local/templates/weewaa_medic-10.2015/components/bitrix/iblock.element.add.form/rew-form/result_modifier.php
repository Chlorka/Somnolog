<?
$newArr = array();
$newArr[0] = 4;
    foreach($arResult["PROPERTY_LIST"] as $prop) {
        if($prop != 4) {
            $newArr[] = $prop;
        }
    }
unset($arResult["PROPERTY_LIST"]);
$arResult["PROPERTY_LIST"] = $newArr;
?>