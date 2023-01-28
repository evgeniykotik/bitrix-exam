<?php
/* SPECIALDATE */

if ($arParams["SPECIALDATE"] == "Y") {
    $arResult["FIRST_DATE"] = $arResult["ITEMS"][0]["ACTIVE_FROM"];
    $this->__component->setResultCacheKeys(array("FIRST_DATE"));
}