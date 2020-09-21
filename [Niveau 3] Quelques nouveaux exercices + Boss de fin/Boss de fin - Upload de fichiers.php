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
        
<?php

                if (isset($_POST["submit"])) 
                {
                    $player1 = !empty($_POST["player1"]);
                    $player2 = !empty($_POST["player2"]);
                    $match_nbr = !empty($_POST["match_nbr"] && $_POST["match_nbr"] <= 64 && $_POST["match_nbr"] > 0);
                    $screenshot = false;

                    if ($_FILES["screenshot"]["error"] === 0) {
                        $file_name = $_FILES["screenshot"]["name"];
                        $file_ext = explode(".", $file_name);
                        $file_ext = end($file_ext);
                        $file_ext = strtolower($file_ext);
                        $allowed_ext = ["png", "jpg", "jpeg"];
                        $file_size = $_FILES["screenshot"]["size"];
                        $file_tmp = $_FILES["screenshot"]["tmp_name"];
                        $file_new_name = $_POST["match_nbr"] . "_" . $_POST["player1"] . "_" . $_POST["player2"] . "_" . "W" . $_POST["winner"] . "." . strtoupper($file_ext);
                            if (in_array($file_ext, $allowed_ext) && $file_size < 2000000) {
                                $screenshot = true;
                            }
                    }

                    $success = $player1 && $player2 && $match_nbr && $screenshot;

                    if ($success) {
                        move_uploaded_file($file_tmp, "uploads/" . $file_new_name);
                    }
                }

?>

    <div class="container">
        <div class="row">
            
                <div class="alert alert-dark">
                    <form action="index.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="player1"> Le nom ou pseudo du Joueur 1: </label>
                            <input type="text" class="form-control" id="player2" name="Player"1 >
                                <?php 
                                if (isset($_POST["submit"])) 
                                {
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
                                if (isset($_POST["submit"]))
                                {
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
                                    echo "<p>Ce champs est obligatoire ! il faut saisir un nombre allant de 1 à 64.</p>";} 
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
                                <input type="file" class="custom-file-input
                                    <?php 
                                    if (isset($_POST["submit"])) {
                                        echo $screenshot ? "" : "is-invalid";
                                    } ?>"
                                id="screenshot" name="screenshot">
                                <label style ="width :550px; font-size:20px"class="custom-file-label" for="screenshot"> Uploader les screenshots </label>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary" style="margin-left:200px; margin-top:0px"> Envoyer </button>
                    </form>
                </div>
            
        </div>
       

</body>

</html>
