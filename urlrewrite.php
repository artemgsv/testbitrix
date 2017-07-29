<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/photo/#",
		"RULE" => "",
		"ID" => "bitrix:photogallery",
		"PATH" => "/photo.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:blog",
		"PATH" => "/index.php",
	),
);

?>