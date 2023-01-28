<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/* SPECIALDATE */

if ($arParams["SPECIALDATE"] == "Y") {
    $arResult["FIRST_DATE"] = $arResult["ITEMS"][0]["ACTIVE_FROM"];
    $this->__component->setResultCacheKeys(array("FIRST_DATE"));
}