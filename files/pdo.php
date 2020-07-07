<?php
    $bdHost = "vps675121.ovh.net";
    $bdLogin = "nicolas";
    $bdPsw = "dev2084zilch";
    $bdName = "";
    $bdTable = "";
    
    try {
        $pdo = new PDO("mysql:host=".$bdHost.";dbname=".$bdName, $bdLogin, $bdPsw);
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>