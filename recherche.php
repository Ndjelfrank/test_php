<?php
    include"cnx.php";

    if (isset($_POST["recherche"])){
        
        $rech = $_POST["recherche"];
        $req = mysqli_query($link,"SELECT * FROM `utilisateur` WHERE `id` = $rech");
        if($req){
            echo"ce numero existe ";
        }else{
            echo"ce numero n'existe pas";
        }

    }

?>