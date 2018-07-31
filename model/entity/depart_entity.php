
<?php

function getAllDeparts(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                depart.*,
                sejour.libelle AS sejour
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}
