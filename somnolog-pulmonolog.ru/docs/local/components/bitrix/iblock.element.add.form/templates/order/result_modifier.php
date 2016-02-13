<?if(CModule::IncludeModule("iblock"))
   {
       $res = CIBlock::GetByID($arParams["IBLOCK_ID"]);
       if($ar_res = $res->GetNext())
           $arResult["IBLOCK_NAME"] = $ar_res['NAME'];

   }
?>