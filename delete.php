<?php
    include "cnx.php";

    if(isset($_POST["id"])){
        $id = $_POST["id"];

        $req = mysqli_query($link, "delete from utilisateur where id = $id");

        if($req){
            header("location:list.php");
        }else{
            echo "erreur de suppression";
        }

    }else{
        echo"champ inexistant...!!!";
    }
?>