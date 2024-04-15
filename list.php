<!DOCTYPE html>
<html>
    <head>
        <title>LISTES DES UTILISATEURS</title>
        <meta charset="utf-8">
        <style>
            body{
                margin : auto ;
                width: 100% ;
                background: #f4f7f863;

            }
            header{
                background: #009879 ;
                color: white;
                width: 100%;
                height: 80px;
                position: fixed;
                top: 0 ;
                z-index: 5;
                display: flex;
                align-content:center;
                align-items: center;
                justify-content:center ;
                flex-direction: row;
                
               

                
            }
            .btn-search{
                background:#009879;
                position: relative;
                left: 170px;
                display: flex;
                width: 50%;
                padding: 4px;

            }
            input[type="search"]{
                position: relative;
                top:4px;
                width:90%;
                height: 37px;
                border-radius:4px;
                padding: 12px;
                font-size: 18px;
                border: none;
            }
            nav{
                
                position: relative;
                width:23% ;
                left: 184px;
            }
            ul{
                position: relative;
                left: px;
                list-style-type: none;
                /* margin: 15px ; */
                
            }
             ul li{
                
                display: inline;
                padding: 10px;
                margin-left: 10px; 

                
            }
            li a {
                color: white;
                text-decoration: none;
                padding: 10px;
            }
            .table-section{
                /* position: relative;
                width: 80%;
                height: 80%;
                top:80%;
                left: 10%; */
                
                width: 70%;
               
                position: relative;
                top: 100px ;
                left: 15%;
                display: flex;
                flex-direction: row;

            }
            .table-div{
                

            }
            table{
                width: 100%;
                border-collapse: collapse ;
                margin : 23px 0 ;
                padding : 4px ;
                font-size : 0.9em ;
                font-family: sans-serif;
                box-shadow: 0 0 25px  rgba(0,0,0,0.35) ;
                border-radius:2% ;
                position: absolute;
                
                
                 
            }

            td ,th {
                padding:  18px;
                text-align:  center ;

            }
            thead{
                padding: 30px ;
            }

            tbody tr{
                border-bottom : 1px solid #dddddd;
                font-size: 17px ;

            }

            thead  tr{
                background-color: #009879 ;
                color:  #ffffff ;
                text-align:  center ;
                font-size: 17px ; 
            }


            tbody   tr.active-row {

                font-weight: bold ;
                color: #009879 ;
            }
            tbody  tr:nth-of-type (even) {
                /*background-color:  #f3f3f3 ;*/

            }
            tfoot tr {
                background-color: #009879 ;
                color:  #ffffff ;
                text-align:  center ;
                font-size: 18px ; 
            }
            
            input[type="submit"]{
                background-color:  #4caf50 ;
                border: none;
                color: white ;
                border-radius: 3px ;
                padding: 10px ;
                margin : 3px ;
                text-align: center ;
                font-weight: bold ;
                width: 100px ; 
                box-shadow: 10px  ;
                font-size: 15px ;

            }
            span input[type="submit"]{
                background-color:  red ;
            }
           
            
            







        </style>
        
    </head>
    <body>
        <header class="">
            <form action="recherche.php" method="post" class="btn-search">
                    <input type="search" name="recherche" id="recherche">
                    <input type="submit" value="Rechercher">
                
            </form>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contacts</a></li>
                    
                </ul>
            </nav>
        </header>
        <section class="table-section">
            <div class="table-div">
                    
            <h1>Liste des utiliateurs</h1>
            
            

                        
            <table >
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>mot de passe</th>
                        <!--<th>Telephone</th>
                        
                        <th>Sexe</th>-->
                        <th>Action</th>
                    </tr>
                </thead>
                
                <?php 
                    include "cnx.php";

                    $req= mysqli_query($link, "SELECT * FROM `utilisateur` ORDER BY `utilisateur`.`id` ASC ");

                    while ($res=mysqli_fetch_array($req))

                    {

                    
                
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $res["id"] ;  ?></td>
                        <td><?php echo $res["nom"] ;  ?></td>
                        <td><?php echo $res["email"] ;  ?></td>
                        <td><?php echo $res["mot_de_passe"] ;  ?></td>
                        
                        <td> 
                            <form action="detail.php" method="POST">
                                <input type="hidden" name="id" value =" <?php echo $res["id"] ;  ?> " >
                                <input type="submit" value="Detail">


                            </form>
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="id" value =" <?php echo $res["id"] ;  ?> " >
                                <span >
                                    <input type="submit" class="red" value="Supprimer">
                                </span>
                                


                            </form>
                        </td>

                    </tr> 
                </tbody>
                <?php
                    }
                ?> 


                    <tfoot>
                        <tr> 
                            <td colspan="5">
                            Liste des utiliateurs inscrit
                        
                            </td>
                        </tr>
                    </tfoot>
                
                
                </table>

            </div>
        </section>

    </body>
</html>