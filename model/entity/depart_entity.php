
<?php

function getAllDeparts(): array {
    global $connexion;

    $query = "SELECT
                depart.*,
                sejour.titre AS sejour,
                pays.libelle AS pays
                
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            INNER JOIN pays ON pays.id = sejour.pays_id
            
           ";

    $stmt = $connexion->prepare($query);
    
    $stmt->execute();

    return $stmt->fetchAll();
}

function getDepart(int $id): array {
    global $connexion;

    $query = "SELECT
                depart.*,
                sejour.titre AS sejour,
                pays.libelle AS pays
                
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            INNER JOIN pays ON pays.id = sejour.pays_id
            
            WHERE depart.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertDepart(string $date_depart, string $prix, string $nb_places, string $sejour_id ): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart ( date_depart, prix, nb_places, sejour_id ) VALUES (:date_depart, :prix, :nb_places, :sejour_id)";
    
    $stmt = $connexion->prepare($query);
    
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}



function updateDepart(int $id, string $date_depart, string $prix, string $nb_places, string $sejour_id ): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart
                SET date_depart = :date_depart,
                    prix = :prix,
                    nb_places= :nb_places,
                    sejour_id = :sejour_id,    
                WHERE id = :id
            ";
                    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}