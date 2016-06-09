<?php

class Connexion {
     
    public static function connect() {
        // fichier contenant les informations pour se connecter
        $fichier = 'config.ini';
        if(file_exists($fichier)) {
        $config = parse_ini_file($fichier, true);
     
        $moteur       = $config['SQL']['moteur'];
        $hote       = $config['SQL']['hote'];
        $login      = $config['SQL']['login'];
        $mdp        = $config['SQL']['mdp'];
        $database   = $config['SQL']['database'];
     
        try {
            $pdo = new PDO($moteur .':host='. $hote .';dbname='. $database, $login, $mdp);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
        }
            return $pdo;
        }
    }
}


?>