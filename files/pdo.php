<?php
    // variable Bdd
    $bdHost = "vps675121.ovh.net";
    $bdLogin = "devynck";
    $bdPsw = "dev2084zilch";
    $bdName = "vps675121";
    // connexion pdo
    try {
        $pdo = new PDO("mysql:host=".$bdHost.";dbname=".$bdName, $bdLogin, $bdPsw);
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>