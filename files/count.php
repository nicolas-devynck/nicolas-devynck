<?php
    // recuperation de l'adresse IP du client (on cherche d'abord a savoir si il est derriere un proxy)
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // INSERT BDD
    $SqlRequete = $pdo->prepare("INSERT INTO ".$bdTable." VALUES (
        :bdId,
        :bdIp
    )");
    $SqlRequete->execute(array(
        'bdId' => NULL,
        'bdIp' => $ip
    ));
    // On recherche le nombre de visiteur depuis le debut
    $SqlRequete = $pdo->prepare("SELECT DISTINCT(ip) FROM ".$bdTable);
    $SqlRequete->execute();
    while ($RetourSql = $SqlRequete->fetch(PDO::FETCH_ASSOC)) { //argument de fetch qui suprime tout les index numerique
        $n = $n+1;
    }
    // affiche dans la console le nombre de visteur
    echo "<script>console.log('".$n."');</script>";
?>