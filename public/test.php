<?php
session_start();

$page = $_GET["page"] ?? "accueil";
$settings = $_GET["settings"] ?? null;
$idUser = $_GET["idUser"] ?? 1;

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/fonction.php";

$user = getUserById($pdo, $idUser);
require_once __DIR__ . "/header.php";

switch ($page) {
    case "add_course":
        if ($user["isAdmin"]) {
            require_once __DIR__ . "/add_course.php";
            break;
        }
    case "add_module":
        if ($user["isAdmin"]) {
            require_once __DIR__ . "/add_module.php";
            break;
        }
    case "accueil":
        if ($user["isAdmin"]) {
            require_once __DIR__ . "/apprenti.php";
            break;
        } else {
            require_once __DIR__ . "/journal.php";
            break;
        }
    case "cour":
        if ($user["isAdmin"]) {
            require_once __DIR__ . "/cour_formateur.php";
            break;
        } else {
            require_once __DIR__ . "/cour_apprenti.php";
            break;
        }
    case "module":
        require_once __DIR__ . "/module.php";
        break;
}
?>
