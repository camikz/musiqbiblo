<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

if (isset($_POST['submit'])){

    $pwd=md5(htmlspecialchars(trim($_POST['pwd'])));
    $log=htmlspecialchars(trim($_POST['log']));
    $serveur="localhost";
    $login ="root";
    $pass="";

try{
    $connexion=new PDO("mysql:host=$serveur;dbname=orange",$login,$pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $req = $connexion->prepare('SELECT * FROM abonnes where login = :login');
    $req ->execute(array('login'=>$log));
    $testlog=$req->fetch();

    $req = $connexion->prepare('SELECT * FROM abonnes WHERE pwd = :pwd');
    $req->execute(array('pwd'=>$pwd));
    $testpwd=$req->fetch();

//    if($testlog && $testpwd){
//        echo "connexion réussie !";
//    }


    if($testlog && $testpwd) {
        $lines = file('D:\Programme\wamp64\www\PHP\EPSI\musicscrum\Projet Bibliotheque\sql\blacklist');
        foreach ($lines as $lineNumber => $lineContent)
        {
            if($log = $lineContent){echo" Le mot est invalide";}
        }

    }

    else{
        echo "Login ou mdp incorrect";
    }
}
catch (PDOException $e) {
    echo "echec connexion :" . $e->getMessage();
}
}

?>


</body>
</html>