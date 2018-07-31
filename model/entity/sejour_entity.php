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

