<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");

$APPLICATION->IncludeComponent(
    "MyComponents:vacancy",
    ".default",
    Array(
        "SEF_FOLDER" =>  "/vacancy/",
        "DETAIL_PAGE_URL" =>  "/vacancy/#ELEMENT_ID#/",
        "IBLOCK_ID" => "2",
        "LIST_PAGE_URL" => "/vacancy/",
    )
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>