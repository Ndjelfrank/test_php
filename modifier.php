<!DOCTYPE html>
<html>
    <head>
        <title> INSCRIPTION</title>
        <meta charset="utf-8">
        <style>
            .head{
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
            }
             
            /*ul{
                list-style-type: none;
                padding: 15px;
                overflow: hidden;
                margin: 8px;
                background-color: #333;
            }
            li{
                display: inline;
                padding: 10px;
                margin: 20px;
            }
            li a {
                color: white;
                padding: 3px;
                margin: 10px;
                text-decoration:none ;
                

            }*/
             
            label{
                width: 20%;
                display: inline-block;
                text-align: left;
                color: rgb(74, 237, 155)  ;
                font-size: 19px;
            }
            body{
                width: 33%;
                font-family: Arial;
                margin: 3% auto;
                padding: 10px; ;
                background-image: url(3.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                

            }
            fieldset{
                border-radius: 8px;
                background-color: rgba(0, 0, 0, 0.6);
                /*backdrop-filter: blur(15px);*/
                
            }
            
            
            input[type="text"], input[type="password"],input[type="email"] {

                border-radius: 5px;
                padding: 20px;
                width: 60%;
                background-color: rgba(0, 0, 0, 0.6);                margin: 14px;
                color: whitesmoke;
                border-radius: 6px;
                transition: border  ease-in-out .5s, #16a085;
                cursor: pointer;

            }
            input[type="submit"]{
                position: relative;
                border-radius: 3px;
                padding: 20px;
                font-size: 23px;
                border: 1px solid #16a085; 
                margin-top:17px ;
                margin-bottom: 12;
                width: 100%;
                background-color: rgb(74, 237, 155);
                background: linear-gradient(30deg,rgb(74, 237, 155) 4% #06BFFF 100%, #2D73FF 100%);
                cursor: pointer;
            }
           
            h2
            {
                text-align: center;
                margin-bottom: 15px;
                color: rgb(74, 237, 155);
                font-size: 37px;
                font-weight: 10px;
                text-shadow: rgb(74, 237, 155);;
            }
            .mash
            {
                right: 150px;
            }


        </style>
    </head>
    <body>
        <section class="head">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="list.php">News</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </nav>
            </header>
        </section>
        <section class="mash">
        <?php
            include"cnx.php";

            if(isset($_POST["id"])){
                $id= $_POST["id"];
                $req = mysqli_query($link, "select* from utilisateur where id= $id");
                $res= mysqli_fetch_array($req);


            }else{
                echo"<p>champs inexistant...!! </p>";
            }    
        

        ?>
            
            <form action="modification.php" method="get">
                <fieldset>
                    
                    <h2 >MODIFICATION</h2>
                        <input type="hidden" value ="<?php echo $res["id"] ;?>" name="id" placeholder="insérer votre nom" autocomplete="off" required> <br>
                        <label for="">Nom</label> <input type="text" value ="<?php echo $res["nom"] ;?>" name="nom" placeholder="insérer votre nom" autocomplete="off" required> <br>
                        <label for="">Email</label> <input type="email" value ="<?php echo $res["email"] ;?>" name="mail" placeholder="insérer votre mail :NomPrenom@gmail.com " autocomplete="off" required> <br>
                        <label for="">Mot de passe</label> <input type="password" value ="<?php echo $res["mot_de_passe"] ;?>" name="mdp" placeholder="insérer votre mot de passe" autocomplete="off" required> <br>
                        <!--<label for="">Tel</label> <input type="tel" name="phone" placeholder="insérer votre numéro de telephone" autocomplete="off" required> <br>
                        <label for="">Sexe</label> <input type="radio" name="gender" value="Homme">Homme <input type="radio" name="gender" value="Femme" autocomplete="off" required>Femme <br>-->
                        <input type="submit" value="modifier">
                   
                </fieldset>
             
            </form>
        </section>
    </body>
</html>