

<?php

function insertPays(string $libelle): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (libelle) VALUES (:libelle)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updatePays(int $id, string $libelle) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays SET libelle = :libelle WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
}
