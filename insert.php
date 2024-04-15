<?php
    include "cnx.php";

    if (isset($_GET["nom"]) && isset($_GET["mail"]) && isset($_GET["mdp"])) // && isset($_GET["phone"])    && isset($_GET["gender"]) )
    {
        $nom= $_GET["nom"] ;
        $mail= $_GET["mail"] ;
        $mdp= $_GET["mdp"] ;
        //$tel= $_GET["phone"] ;
        
        //$sexe= $_GET["gender"] ;

        $req= mysqli_query($link, "INSERT INTO `utilisateur`(`nom`, `email`, `mot_de_passe`) VALUES ('$nom', '$mail', '$mdp')");// insert into utilisateur (nom, email, mot_de_passe, ) values ('$nom', '$mail', '$mdp' ) ") ;

        if ($req)
        {
            
            echo "insertion éffectuée";
            header("location:list.php");
            
            
        }else
        {
            
            echo "echec de l'insertion" ;
            
        }
    


    }
    


?>