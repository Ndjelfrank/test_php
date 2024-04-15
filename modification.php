<!-- run my code below ?-->

<?php
    include "cnx.php";

    if(isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["mail"]) && isset($_GET["mdp"]) ){
        $id = $_GET["id"];
        $nom = $_GET["nom"];
        $email =$_GET["mail"];
        $mdp =$_GET["mdp"];

        $req = mysqli_query($link,"UPDATE `utilisateur` SET `nom`='$nom',`email`='$email',`mot_de_passe`='$mdp' WHERE id=$id");//"update utilisateur set nom =$nom, email=$email, mot_de_passe=$mdp where id=$id");

        if($req){
            header("location:list.php");
        }else{
            echo "erreur de modification";
        }

    }else{
        echo" champ inexistant.. !!";
    }


?>