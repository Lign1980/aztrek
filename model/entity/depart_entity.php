
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

function insertDepart(string $titre, string $image, string $date_depart, string $prix, string $nb_places, string $sejour ): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, image, date_depart, prix, nb_places, sejour, ) VALUES (:titre, :image, :date_depart, :prix, :nb_places, :sejour,)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_depart", $date-depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour", $sejour);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}



function updateDepart(int $id, string $titre, string $image, string $date_depart, string $prix, string $nb_places, string $sejour ): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart
                SET titre = :titre,
                    image = :image,
                    date_depart = :date_depart,
                    prix = :prix,
                    nb_places= :nb_places,
                    sejour = :sejour,
                    
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_depart", $date-depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour", $sejour);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}