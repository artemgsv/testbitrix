<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $arResult;
?>
<div class="container">
                <h1><?= $arResult["VACANCY"][0]["NAME"]?></a></h1>
                <p>Зарплата от : <?= $arResult["VACANCY"][0]["PROPERTY_SALARY_FROM_VALUE"]?></p>
                <p>Зарплата до : <?= $arResult["VACANCY"][0]["PROPERTY_SALARY_UP_TO_VALUE"]?></p>
                <p>Специальность: <?= $arResult["VACANCY"][0]["PROPERTY_SPECIAL_VALUE"]?></p>
                <p>Название организации: <?= $arResult["VACANCY"][0]["PROPERTY_EMPLOYERS_PROPERTY_NAME_VALUE"]?></p>
                <p>Адрес: <?= $arResult["VACANCY"][0]["PROPERTY_EMPLOYERS_PROPERTY_ADDRESS_VALUE"] ?></p>
                <p>Эл.почта: <?= $arResult["VACANCY"][0]["PROPERTY_EMPLOYERS_PROPERTY_EMAIL_VALUE"] ?></p>
                <p>Телефон: <?= $arResult["VACANCY"][0]["PROPERTY_EMPLOYERS_PROPERTY_NUMBER_VALUE"] ?></p>
                <a href="<?= $arResult["PAGE_URL"] ?>">Вернуться к списку вакансий</a>
</div>