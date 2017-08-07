<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<?
CModule::IncludeModule("iblock");
$sort = array
(
    "name"=>"desc",
);
$filter = array
(
    "IBLOCK_ID" =>2,
);
$navigation = array
(
    "nPageSize" => 5,
);
$fields = array
(
    "IBLOCK_ID",
    "ID",
    "NAME",
    "PROPERTY_SALARY_FROM",
    "PROPERTY_SALARY_UP_TO",
    "PROPERTY_EMPLOYERS.NAME"
);
$vacancy = CIBlockElement::GetList($sort, $filter, false, $navigation,$fields);
$unit = $vacancy->GetNextElement();
$item = $unit->GetFields();
$item["PROPERTIES"] = $unit->GetProperties();
echo $item["PROPERTIES"]["SPECIAL"]["NAME"] . " - " . $item["PROPERTIES"]["SPECIAL"]["VALUE"];


var_dump($item);

?>
Пустая страница. <a href="/bitrix/admin/">Перейти в Панель Управления</a>.

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>