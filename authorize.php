<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?
$APPLICATION->SetTitle("Авторизация");
$APPLICATION->IncludeComponent(
    "MyComponents:user.auth",
    "",
    Array()
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>