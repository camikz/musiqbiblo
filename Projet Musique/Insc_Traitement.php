<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if (isset($_POST['submit'])){
    $civ=$_POST['civ'];
    $prenom=htmlspecialchars(trim($_POST['prenom']));
    $nom=htmlspecialchars(trim($_POST['nom']));
    $log=htmlspecialchars(trim($_POST['log']));
    $pwd=md5(htmlspecialchars(trim($_POST['pwd'])));
    $rpwd=md5(htmlspecialchars(trim($_POST['rpwd'])));
    $mail=htmlspecialchars(trim($_POST['mail']));
    $serveur="localhost";
    $login ="root";
    $pass="";


    if($pwd==$rpwd){
        if(strlen($pwd)>5){

            $connexion=new PDO("mysql:host=$serveur;dbname=orange",$login,$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));

            $req = $connexion->prepare('SELECT * FROM abonnes WHERE login = :login');
            $req->execute(array('login'=>$log));
            $testlog=$req->fetch();

            if(!$testlog){

                $req = $connexion->prepare('SELECT * FROM abonnes WHERE mail = :mail');
                $req->execute(array('mail'=>$mail));
                $testmail=$req->fetch();
                
                

                if(!$testmail){
                    try{
                        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $requete=$connexion->prepare(
                            "INSERT INTO abonnes (civilite,prenom,nom,login,pwd,mail)
                        VALUES (:civilite,:prenom,:nom,:login,:pwd,:mail) "
                        );

                        $requete->bindParam(':civilite',$civ);
                        $requete->bindParam(':prenom',$prenom);
                        $requete->bindParam(':nom',$nom);
                        $requete->bindParam(':login',$log);
                        $requete->bindParam(':pwd',$pwd);
                        $requete->bindParam(':mail',$mail);

                        $requete->execute();
                        echo "Votre compte a été bien crée :";
                    }
                    catch(PDOException $e) {
                        echo "Echec connexion : " . $e->getMessage();
                    }

                }

               else{
                   echo "mail déja utilisé";
               }
            }
            else{
                echo "ca pseudo existe déja";
            }


        }else {
            echo"votre mot de passe doit avoir au mois 5 caracteres";
        }

    }else{
        echo "les deux mots de passe sont differents";
    }
}

?>


</body>
</html>