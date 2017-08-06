<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
class CVacancyDetail extends CBitrixComponent
{
    private static function selectionOfProperties()
    {
        return array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SALARY_FROM", "PROPERTY_SALARY_UP_TO", "PROPERTY_SPECIAL", "PROPERTY_EMPLOYERS.NAME", "PROPERTY_EMPLOYERS.PROPERTY_EMAIL", "PROPERTY_EMPLOYERS.PROPERTY_ADDRESS", "PROPERTY_EMPLOYERS.PROPERTY_NUMBER");
    }
    private static function sort()
    {
        return array(
            "active_from" => "asc",
            "name" => "asc",
        );
    }
    private  static function filter($id, $iBlockID, $elementID)
    {
        if(is_numeric($id)) {
            $arFilter = array(
                "ACTIVE" => "Y",
                "IBLOCK_ID" => $iBlockID,
                "ID" => $elementID,
            );
        } else {
            $arFilter = array(
                "ACTIVE" => "Y",
                "IBLOCK_ID" => $iBlockID,
                "CODE" => $elementID,
            );
        }
        return $arFilter;
    }
    public function executeComponent($rsVacancy)
    {

        $this->IncludeComponentTemplate();
    }
}