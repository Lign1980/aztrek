<?php

function getOneUtilisateurByEmailPassword(string $email, string $password) {
    global $connexion;
    
    $query = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe =SHA1 (:password)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}

