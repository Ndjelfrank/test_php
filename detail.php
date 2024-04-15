<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
<?php 
         include "cnx.php";

            if(isset($_POST['id'])){
                
                $id = $_POST["id"];


                $req= mysqli_query($link, "select* from utilisateur where id= $id ");
            }

                while ($res=mysqli_fetch_array($req))
                

                {

                
            
            ?>

    <h2>VOS INFORMATIONS</h2>
    <p class="">votre numero est :<?php echo $res["id"] ;  ?> </p>
    <p class="">votre nom est :<?php echo $res["nom"] ;  ?> </p>
    <p class="">votre email est : <?php echo $res["email"] ;  ?></p>
    <p class="">votre mot de passe est :<?php echo $res["mot_de_passe"] ;  ?> </p>

    <form action="modifier.php" method="POST">
          <input type="hidden" name="id" value =" <?php echo $res["id"] ;  ?> " >
          <input type="submit" value="modifier">


    </form>

    <?php
                }
            ?> 
</body>
</html>