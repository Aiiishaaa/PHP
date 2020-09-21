<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>  Upload de Fichiers </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>

        h1{
            font-family :Arial;
            font-size: 80px;
            color: blue;
            margin-top:100px;
            margin-left:50px;
        }
        h3{
            font-size: 30px;      
            margin-bottom:100px; 
            margin-left:50px;
        }      
        form { 
            padding-right:50px;
            margin-left: 50px;
        }
        label {
             font-size:30px;
             font-family:Arial;
             color: black ;
        }
        p{
            font-size:40px;
        }
        .btn {
            margin-top :100px;
            text-align:right;
        }
        
    </style>
</head>

<body>


<h1> OBJECTIF :</h1>

<h3>  Gérer l’upload de fichiers en PHP depuis un formulaire.  </h3>
        

    <div class="container">
        <div class="row">
            
                <div class="alert alert-dark">
                    <form action="index.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="player1"> Le nom ou pseudo du Joueur 1: </label>
                            <input type="text" class="form-control" id="player2" name="Player"1 >
                                <?php 
                                if (isset($_POST["submit"])) {
                                    if ($player1) { 
                                        echo $_POST["player1"];} 
                                    else { 
                                        echo "Ce champs est obligatoire !";}  
                                }
                                ?>
                        </div>

                        <div class="form-group">
                            <label for="player2"> Le nom ou pseudo du Joueur 2: </label>
                            <input type=text class=form-control id=player2 name=Player2 >
                                <?php
                                if (isset($_POST["submit"])) {
                                    if ($player2) {
                                          echo $_POST["player2"];}
                                    else { 
                                        echo "Ce champs est obligatoire !";} 
                                }
                                ?>
                        </div>

                        <div class="form-group">
                            <label for="player1"> L'identifiant du match: </label>
                            <input type=text class=form-control id=match_nbr name=match_nbr >
                            <?php 
                                if (isset($_POST["submit"])) {
                                if ($match_nbr) { 
                                    echo $_POST["match_nbr"];}
                                else { 
                                    echo "Ce champs est obligatoire ! il faut saisir un nombre allant de 1 à 64.";} 
                             } ?>
                        </div>

                        <div class="form-group">
                            <p> Qui a gagné ?</p>
                            <div class="form-check">
                                <input  style ="margin-left:20px" type="radio" name="winner" id="winner1" value="1" class="form-check-input" checked>
                                <label  style =" margin-left:35px; width :480px;font-size:20px" for="winner1" class="form-check-label">Joueur 1</label>
                            </div>
                            <div class="form-check">
                                <input style ="margin-left:20px" type="radio" name="winner" id="winner2" value="2" class="form-check-input">
                                <label style ="margin-left:35px; width :480px;font-size:20px" for="winner2" class="form-check-label" >Joueur 2</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?php if (isset($_POST["submit"])) {echo $screenshot ? "" : "is-invalid";} ?>" id="screenshot" name="screenshot">
                                <label style ="width :550px; font-size:20px"class="custom-file-label" for="screenshot"> Uploader les screenshots </label>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary" style="margin-left:200px; margin-top:0px"> Envoyer </button>
                    </form>
                </div>
            
        </div>
        <div class="row">
            
               
            
        </div>
    </div>

</body>

</html>
</body>
</html>