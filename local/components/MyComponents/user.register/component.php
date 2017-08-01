<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
$this->IncludeComponentTemplate();
if(!empty($_POST)) {
    if (isAllFields($_POST["login"], $_POST["password"], $_POST["rpassword"], $_POST["mail"])) {
        $validation = validation($_POST["login"], $_POST["mail"], $_POST["password"]);
        if (empty($validation)) {
            $fields = Array(
                "LOGIN" => $_POST["login"],
                "EMAIL" => $_POST["mail"],
                "PASSWORD" => $_POST["password"],
                "CONFIRM_PASSWORD" => $_POST["rpassword"],
            );
            $new_user = $USER->Add($fields);
            if (intval($new_user) > 0) {
                echo "Вы успешно зарегистрированы";
                die;
            } else {
                echo $USER->LAST_ERROR;
            }
        }
        else {
            foreach($validation as $error) {
                echo $error . "<br>";
            }
        }
    }

}

function isAllFields($login, $password, $rpassword, $email) {
    $login = trim($login);
    $password = trim($password);
    $rpassword = trim($rpassword);
    $email = trim($email);
    if (!empty($login) && !empty($password) && !empty($rpassword) && !empty($email)) {
        return true;
    }
    return false;
}

function validation($login, $email, $password) {
    $errors = array();
    if (strlen(trim($login)) <= 3 && strlen(trim($login)) >= 15) {
        $errors[] = "Длина логина должна быть больше 3 символов и меньше 15 символов";
    }

    if (strlen(trim($password)) <= 3 && strlen(trim($password)) >=15) {
        $errors[] = "Длина пароля должна быть более 3 символов и меньше 15 символов";
    }

    $filter = array(
        "EMAIL" => $email
    );
    $by = "email";
    $order = "desc";
    $users = CUser::GetList($by, $order, $filter);
    if ($users->result->num_rows > 0) {
        $errors[] = "Пользователь с таким e-mail уже существует";
    }

    return $errors;

}
