<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $arResult;
?>
<div class="container">
            <? foreach($arResult["VACANCY"] as $element) : ?>
                <h1> <a href="<?=$element["DETAIL_PAGE_URL"]?>"><?= $element["NAME"]?></a></h1>
                <p>Зарплата от : <?= $element["PROPERTY_SALARY_FROM_VALUE"]?></p>
                <p>Зарплата до : <?= $element["PROPERTY_SALARY_UP_TO_VALUE"]?></p>
                <p>Специальность: <?= $element["PROPERTY_SPECIAL_VALUE"]?></p>
                <p>Название организации: <?= $element["PROPERTY_EMPLOYERS_PROPERTY_NAME_VALUE"]?></p>
                <p>Адрес: <?= $element["PROPERTY_EMPLOYERS_PROPERTY_ADDRESS_VALUE"] ?></p>
                <p>Эл.почта: <?= $element["PROPERTY_EMPLOYERS_PROPERTY_EMAIL_VALUE"] ?></p>
                <p>Телефон: <?= $element["PROPERTY_EMPLOYERS_PROPERTY_NUMBER_VALUE"]?></p>
            <? endforeach; ?>

                <a href="<?= $arResult["PAGE_URL"] ?>">Вернуться к списку вакансий</a>
</div>