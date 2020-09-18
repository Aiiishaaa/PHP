<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>   Traitement de formulaire </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <style>

        h2{
            font-family :Arial;
            font-size: 80px;
            color: blue;
        }
        h3{
            font-size: 30px;       
        }
        h4 {
           font-size:20px;
           margin-left:60px;
         
        }
        li {
            margin-left:60px;
            
        }
      
        .form{ 
            display: flex;
            flex-direction: row;
            background-color: white;       
        }
        form { 

            padding-right:50px;
            margin-left: 250px;
        }
      
        label {
             font-size:20px;
             font-family:Arial;
             color: green ;
         }
        
    </style>
</head>

<body>


<h2> Exercice 1</h2>

    <ul>
        <h3>  Créez un formulaire qui vous demande : </h3>
        <li>Votre nom</li>
        <li>Votre prénom</li>
        <li>Votre ville de naissance</li>
    </ul>

    <h4> ===> Lorsque le formulaire est soumis, affichez une phrase du type : “Bonjour prenom nom, vous êtes né à ville.” </h4>
    <h4> ===> Créez une version avec la méthode GET et une autre avec la méthode POST pour vous entraîner . </h4>

     <div class="form">

                <?php
                            if (isset($_GET["submit"])) {
                                    echo " <H1>Bonjour ". $_GET["name"] ." ". $_GET["fname"]." Vous êtes né à " . $_GET["city"]."</H1>";
                            }
                ?>
                <p>
                        <form action="traitement.php" method="get">
                            <p>
                               <label for="name">Nom :</label><br>
                               <input type="text" id="name" name="name" placeholder="Taper votre nom">
                            </p>

                            <p>
                               <label for="fname">Prénom :</label><br>
                               <input type="text" id="fname" name="fname"  placeholder="Taper votre prénom">
                            </p>

                            <p>
                               <label for="city">Ville :</label><br>
                               <input type="text" id="city" name="city" placeholder="Taper votre lieu de naissance"  style =" width:300px">
                            </p>

                            <input type="submit" value="Envoyer" name="submit">
                        </form>
                </p>

                <?php
                            if (isset($_POST["psubmit"])) {
                                    echo " <H1>Bonjour " . $_POST["pname"] . " " . $_POST["pfname"] ." Vous êtes né à " . $_POST["pcity"]."</H1>";}
                ?>
                <p>
                        <form action="traitement.php" method="post">
                            <p>
                                <label for="pname">Nom :</label><br>
                                <input type="text" id="pname" name="pname" placeholder="Taper votre nom" >
                            </p>

                            <p>
                                <label for="fname">Prénom :</label><br>
                                <input type="text" id="pfname" name="pfname" placeholder="Taper votre prénom" > 
                            </p>

                            <p>
                                <label for="city">Ville :</label><br>
                                <input type="text" id="pcity" name="pcity" placeholder="Taper votre lieu de naissance"  style =" width:300px">
                            </p>

                            <input type="submit" value="Envoyer" name="psubmit">
                        </form>
                </p>
    </div>
       



 
<h2> Exercice 2</h2>

<h3>  Créez un système de notation de jeu vidéo :</h3>
<ul style=" font-size:25px"> Aide :
  <li>Les bootstrap cards peuvent aider sur la mise en forme</li>
  <li>Les étoiles sont disponibles via font-awesome</li>
  <li>Les infos sur le jeu peuvent être stockées sous forme de tableau(titre => fortnite, image => adresse_de_l’image)</li>
</ul>

<ul style = "color:violet"> Bonus :</ul>
<ul> Pour ceux qui trouvent ça trop facile, faites de même mais en créant catalogue de jeu(donc plusieurs jeux à noter). Pour faire persister les données sans base de
    données vous pouvez stocker les données dans la session.(ou alors commencer à regarder du côté de mysql et faire vos premiers essais sur les bases de données).</h4>
</ul>

    <div class="container">
        <div class="row">
     
     
        <?php 

         $data = [
             [
                 "name" => "Mario",
                 "img" => "mario.jpg",
                 "note" => 5,
                 "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero optio nobis! Officia, optio aspernatur odio
                 quam commodi sapiente tempore officiis? Veritatis quas, voluptas labore quae fugit quaerat dolorem
                 similique?Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
             ],
             [
                 "name" => "Pokemon",
                 "img" => "pokemon.jpg",
                 "note" => 4,
                 "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero optio nobis! Officia, optio aspernatur odio
                 quam commodi sapiente tempore officiis? Veritatis quas, voluptas labore quae fugit quaerat dolorem
                 similique?Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
             ],
             [
                 "name" => " Jumanji ",
                 "img" => "jumanji.jpg",
                 "note" => 3,
                 "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero optio nobis! Officia, optio aspernatur odio
                 quam commodi sapiente tempore officiis? Veritatis quas, voluptas labore quae fugit quaerat dolorem
                 similique?Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
             ],
         ];

        foreach ($data as $elt) { ?>
            <div class="col-4">
                <div class="card" style="width: 300px">
                    <img  style="height:400px" src="<?php echo $elt["img"] ?>" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title" style="font:Times;color:red ; text-align:center">
                            <?php echo $elt["name"] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $elt["text"] ?>
                        </p>
                        <p class="card-text">
                            <?php 
                                for ($i = 0; $i < $elt["note"]; $i++) {
                                    echo '<i class="fa fa-star"></i>';
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>
    </div>
            <h2> Exercice 3</h2>

<h3> Créez un formulaire de contact (A partir de l’exercice 1) :</h3>
<ul> Champs :
    <li>Nom</li>
    <li>Prénom</li>
    <li>Numéro de téléphone</li>
    <li>Adresse email</li>
    <li>Genre(boutons radio)</li>
    <li>Raison de prise de contact(liste déroulante) </li> 
    <ul><li>Simple information</li>
    <li>Probleme technique</li>
    <li>Proposition de projet</li></ul>
    <li>Message </li>
</ul>



<ul>
    <h4 style="color:red"> Coté Front: </h4>
    <li> Aider l’utilisateur avec une vérification des champs (ergonomie, affichage des champs requis, vérification email...)</li>
    <li> L’envoi du formulaire est désactivé tant que les champs ne sont pas valides </li>
</ul>

<ul>
    <h4 style="color: red"> Coté Back: </h4>
    <li> Revérifier les informations des champs reçus côté serveur. </li>
    <li> Envoyer un mail avec les informations ( regardez comment configurer l’envoi depuis wamp). </li>
</ul>

<div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Nom: </label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Taper votre nom"  required >
                    </div>
                    <div class="form-group">
                        <label for="fname">Prénom: </label>
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Taper votre prénom"  required>
                    </div>
                    <div class="form-group">
                        <label for="city">Ville: </label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Taper votre ville"  required>
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone: </label>
                        <input type="tel" id="tel" name="tel" class="form-control" pattern="0[0-9] [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"  placeholder="Taper votre numero de téléphone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse Email: </label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Taper votre adresse email"  required>
                    </div>
                    <div class="form-group">
                        <label>Votre genre :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" >
                            <label class="form-check-label" style =" color :black"for="gender1">
                                Homme
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="F" checked>
                            <label class="form-check-labe" style =" color :black" for="gender2">
                                Femme
                            </label>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="objet"> Raison de prise de contact :</label>
                        <select class="form-control" id="objet" name="objet">
                            <option> Simple information </option>
                            <option> Probleme technique</option>
                            <option> Proposition de projet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationTextarea"> Message :</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>




</body>
</html>