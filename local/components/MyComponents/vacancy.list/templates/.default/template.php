<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $arResult;
//var_dump($arResult["VACANCY"]);
?>

<div class="container">
    <? foreach($arResult["VACANCY"] as $element) : ?>
        <h1> <a href="<?=$element["DETAIL_PAGE_URL"]?>"><?= $element["NAME"]?></a></h1>
    <p>Зарплата от : <?= $element["PROPERTY_SALARY_FROM_VALUE"]?></p>
    <p>Зарплата до : <?= $element["PROPERTY_SALARY_UP_TO_VALUE"]?></p>
    <p>Название организации: <?= $element["PROPERTY_EMPLOYERS_NAME"]?></p>
    <p>Специальность: <?= $element["PROPERTY_SPECIAL_VALUE"]?></p>
    <? endforeach; ?>

    <!--Pagination-->
    <div class="row">
        <?=$arResult["NAV_STRING"];?>
    </div>

</div>
