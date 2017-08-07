<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
class CVacancyDetail extends CBitrixComponent {
    private static function prepareSort()
    {
        return array(
            "active_from" => "desc",
            "name" => "asc",
        );
    }
    private static function prepareFilter($id)
    {
        return array(
            "ACTIVE" => "Y",
            "IBLOCK_ID" => $id
        );
    }
    private static function chooseProperties()
    {
        return array(
            "ID",
            "IBLOCK_ID",
            "NAME",
            "PROPERTY_SALARY_FROM",
            "PROPERTY_SALARY_UP_TO",
            "PROPERTY_SPECIAL",
            "PROPERTY_EMPLOYERS.PROPERTY_NAME",
            "PROPERTY_EMPLOYERS.PROPERTY_ADDRESS",
            "PROPERTY_EMPLOYERS.PROPERTY_EMAIL",
            "PROPERTY_EMPLOYERS.PROPERTY_NUMBER",
        );
    }
    private static function paramsOfNavigation($pageSize)
    {
        return array(
            "nPageSize" => $pageSize,
        );
    }
    public function executeComponent($property)
    {
        global $arResult;
        CModule::IncludeModule("iblock");
        $sort = self::prepareSort();
        $filter = self::prepareFilter(2);
        $navigation = self::paramsOfNavigation($this->arParams["PAGE_SIZE"]);
        $fields = self::chooseProperties();
        $vacancy = CIBlockElement::GetList($sort, $filter, false, $navigation,$fields);
        $vacancy->SetUrlTemplates($this->arParams["DETAIL_PAGE_URL"], "", $this->arParams["LIST_PAGE_URL"]);
        $arResult["PAGE_URL"] = $vacancy->strListUrl;
        while ($element = $vacancy->GetNextElement()) {
            $item = $element->GetFields();
            $arResult["VACANCY"][] = $item;
        }
        $this->includeComponentTemplate();
    }

}