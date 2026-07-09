<?php
session_start();

//require_once __DIR__ . "/includes/utils.php";

$page = $_GET["page"] ?? "accueil";
$settings = $_GET["settings"] ?? null;
$idUser = $_GET["settings"] ?? 1;
$user = {
    "idUser" : $idUser,
    "name" : "Luc",
    "email" : "luc@luc.ch",
    "firstName" : "Bo",
    "password" : "123",
    "startYaer" : 2025,
    "isAdmin" : false
}

if ($user["isAdmin"]) {
    require_once __DIR__ . "/header_formateur.php";
    break;
}
else {
    require_once __DIR__ . "/header_apprentis.php";
    break;
}

switch ($page) {
    case "add_course":
        require_once __DIR__ . "/add_course.php";
        break;

    case "add_module":
        require_once __DIR__ . "/add_module.php";
        break;

    case "apprenti":
        require_once __DIR__ . "/apprenti.php";
        break;

    case "cour":
        if ($user["isAdmin"]) {
            require_once __DIR__ . "/cour_formateur.php";
            break;
        }
        else {
            require_once __DIR__ . "/cour_apprentis.php";
            break;
        }
    case "journal":
        require_once __DIR__ . "/journal.php";
        break;

    case "module":
        require_once __DIR__ . "/module.php";
        break;
}

?>
