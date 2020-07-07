<?php
    $bdHost = "vps675121.ovh.net";
    $bdLogin = "devynck";
    $bdPsw = "dev2084zilch";
    $bdName = "count";
    $bdTable = "count";
    
    try {
        $pdo = new PDO("mysql:host=".$bdHost.";dbname=".$bdName, $bdLogin, $bdPsw);
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>