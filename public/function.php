<?php
function getUserById($pdo, int $idUser)
{
    $sql = "SELECT u.*, j.name AS jobName, s.name AS siteName
            FROM User u
            LEFT JOIN Job j  ON u.idJob  = j.idJob
            LEFT JOIN site s ON u.idSite = s.idSite
            WHERE u.idUser = :idUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["idUser" => $idUser]);
    return $stmt->fetch();
}

function getCoursesByApprenti($pdo, int $idUser)
{
    $sql = "SELECT c.*, cu.idCourseUser, s.name AS siteName,
                   m.name AS moduleName, m.description, m.color, m.durationMinute, m.isIntern
            FROM course c
            INNER JOIN courseUser cu ON c.idCourse = cu.idCourse
            LEFT JOIN site s ON c.idSite = s.idSite
            LEFT JOIN module m ON c.idModule = m.idModule
            WHERE cu.idUser = :idUser";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "idUser" => $idUser
    ]);

    return $stmt->fetchAll();
}

function getAllSites($pdo)
{
    $stmt = $pdo->query("SELECT * FROM site ORDER BY name");
    return $stmt->fetchAll();
}

function getSiteById(PDO $pdo, int $idSite)
{
    $stmt = $pdo->prepare("SELECT * FROM site WHERE idSite = :idSite");
    $stmt->execute(["idSite" => $idSite]);
    return $stmt->fetch();
}

function getAllJobs(PDO $pdo)
{
    $stmt = $pdo->query("SELECT * FROM Job ORDER BY name");
    return $stmt->fetchAll();
}

/** Récupère un métier par son id */
function getJobById(PDO $pdo, int $idJob)
{
    $stmt = $pdo->prepare("SELECT * FROM Job WHERE idJob = :idJob");
    $stmt->execute(["idJob" => $idJob]);
    return $stmt->fetch();
}
