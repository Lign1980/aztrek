<?php

function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.libelle AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getBestSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.libelle AS pays,
                COUNT(reservation.id) AS nb_reservations,
                MIN(depart.prix) AS prix,
                MIN(depart.date_depart) AS date_depart
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            WHERE (depart.date_depart > NOW() OR depart.date_depart IS NULL)
            GROUP BY sejour.id
            ORDER BY nb_reservations DESC
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getSejour(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.libelle AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            WHERE sejour.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejour(string $titre, string $image, string $duree, string $difficultee, string $description_courte, string $description_longue, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, image, duree, difficultee, description_courte, description_longue, pays_id) VALUES (:titre, :image, :duree, :difficultee, :description_courte, :description_longue, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":difficultee", $difficultee);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}



function updateSejour(int $id, string $titre, string $image, string $duree, string $difficultee, string $description_courte, string $description_longue, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour
                SET titre = :titre,
                    image = :image,
                    duree = :duree,
                    difficultee = :difficultee,
                    description_courte= :description_courte,
                    description_longue = :description_longue,
                    pays_id = :pays_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":difficultee", $difficultee);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}