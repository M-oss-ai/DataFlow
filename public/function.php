<?php
function getUserById($pdo, int $idUser)
{
    if ($pdo == null) {
        return [
            "idUser" => $idUser,
            "name" => "Luc",
            "email" => "luc@luc.ch",
            "firstName" => "Bo",
            "password" => "123",
            "startYear" => $idUser != 1 ? null : 2025,
            "isAdmin" => $idUser != 1,
            "idJob" => 1,
            "idSite" => 1,
            "jobName" => "DEV",
            "siteName" => "BNE",
        ];
    }

    $sql = "SELECT u.*, j.name AS jobName, s.name AS siteName
            FROM User_ u
            LEFT JOIN Job j  ON u.idJob  = j.idJob
            LEFT JOIN site s ON u.idSite = s.idSite
            WHERE u.idUser = :idUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["idUser" => $idUser]);
    return $stmt->fetch();
}

function getCoursesByApprenti($pdo, int $idUser)
{
    if ($pdo == null) {
        return [
            [
                "idCourse" => 1,
                "isSupport" => true,
                "startDate" => "2025-01-01",
                "endDate" => "2026-01-01",
                "password" => "123",
                "idUser" => $idUser,
                "isSite" => 1,
                "idModule" => 1,
                "idCourseUser" => 1,
                "siteName" => "BNE",
                "moduleName" => "M100",
                "description" => "Un module",
                "color" => "FFFF00",
                "durationMinute" => 2000,
                "isIntern" => false,
            ],
            [
                "idCourse" => 2,
                "isSupport" => true,
                "startDate" => "2025-01-01",
                "endDate" => "2026-01-01",
                "password" => "123",
                "idUser" => $idUser,
                "isSite" => 1,
                "idModule" => 1,
                "idCourseUser" => 1,
                "siteName" => "BNE",
                "moduleName" => "M101",
                "description" => "Un module",
                "color" => "FFFF00",
                "durationMinute" => 2000,
                "isIntern" => false,
            ],
        ];
    }

    $sql = "SELECT c.*, cu.idCourseUser, s.name AS siteName,
                   m.name AS moduleName, m.description, m.color, m.durationMinute, m.isIntern
            FROM course c
            INNER JOIN courseUser cu ON c.idCourse = cu.idCourse
            LEFT JOIN site s         ON c.idSite   = s.idSite
            LEFT JOIN module_ m      ON c.idModule = m.idModule
            WHERE cu.idUser = :idUser";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(["idUser" => $idUser]);

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function getAllSites($pdo)
{
    if ($pdo == null) {
        return [
            [
                "idSite" => 1,
                "name" => "BNE",
            ],
            [
                "idSite" => 2,
                "name" => "GVE",
            ],
        ];
    }

    $stmt = $pdo->query("SELECT * FROM site ORDER BY name");
    return $stmt->fetchAll();
}

function getSiteById(PDO $pdo, int $idSite)
{
    if ($pdo == null) {
        return [
            "idSite" => $idSite,
            "name" => "BNE",
        ];
    }
    $stmt = $pdo->prepare("SELECT * FROM site WHERE idSite = :idSite");
    $stmt->execute(["idSite" => $idSite]);
    return $stmt->fetch();
}

function getAllJobs(PDO $pdo)
{
    if ($pdo == null) {
        return [
            [
                "idJob" => 1,
                "name" => "BNE",
            ],
            [
                "idJob" => 2,
                "name" => "INFRA",
            ],
            [
                "idJob" => 3,
                "name" => "OP",
            ],
        ];
    }
    $stmt = $pdo->query("SELECT * FROM Job ORDER BY name");
    return $stmt->fetchAll();
}

/** Récupère un métier par son id */
function getJobById(PDO $pdo, int $idJob)
{
    if ($pdo == null) {
        return [
            "idJob" => $idJob,
            "name" => "DEV",
        ];
    }
    $stmt = $pdo->prepare("SELECT * FROM Job WHERE idJob = :idJob");
    $stmt->execute(["idJob" => $idJob]);
    return $stmt->fetch();
}
