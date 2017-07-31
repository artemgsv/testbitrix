<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/style.css');?>">
</head>

<body>
<?$APPLICATION->ShowPanel()?>
<div class="wrapper">
    <header class="header">
        <ul>
            <li><a href="/index.php"><h1>Главная</h1></a></li>
        </ul>
    </header>