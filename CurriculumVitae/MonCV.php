
<?php

$to = 'aicha.hamida06@yahoo.fr';
$subject = $_POST['subject'];
$message=$_POST['name'];
$message .=$_POST['message'];
$from = $_POST['email'];

// Envoi d'email
if(mail($to, $subject, $message)){
    echo 'Votre message a été envoyé avec succès!';
} else{
    echo 'Impossible d envoyer des emails. Veuillez réessayer.';
}

?>



<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CV développeur web - Aicha HaMIDA</title>

    <style type="text/css">
        .site-content__head {
            text-align: center;
        }
        
        .subtitle {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bolder;
        }
        
        .nom_prenom {
            padding-top: 50px;
            font-size: 50px;
            font-family: Impact, sans-serif;
            background-image: linear-gradient(to left, midnightblue, royalblue, lightblue, red);
            -webkit-background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .about {
            font-family: Impact;
            font-size: 25px;
            background-image: linear-gradient(to left, teal, red, lightblue, royalblue);
            -webkit-background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .about-description {
            padding-top: 30px;
            margin-right: 30px;
            font-family: sans-serif;
            text-align: justify;
            font-size: 19px;
        }
        
        .title {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 50px;
            color: lightblue;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .Skills1 {
            margin-right: 30px;
            text-align: justify;
            margin-bottom: 0px;
            padding-top: 20px;
        }
        
        .Skills2 {
            margin-top: 50px;
            font-family: sans-serif;
        }
        
        p:hover {
            background-color: blanchedalmond;
        }
        
        .diplomes {
            margin: 10px;
        }
        
        .experiences {
            margin-top: 20px;
            margin-right: 30px;
        }
        
        #contact {
            padding-top: 50px;
        }
        
        .download-button {
            margin-left: 150px;
            margin-bottom: 29px;
            margin-top: 70px;
        }
    </style>
    <link rel='stylesheet' id='bootstrap-css' href='https://w5.foxdsgn.com/niko/classic/wp-content/themes/niko/assets/css/libs/bootstrap.min.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-scrollbar-styles-css' href='https://w5.foxdsgn.com/niko/classic/wp-content/themes/niko/assets/css/libs/jquery.mCustomScrollbar.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='niko-theme-styles-css' href='https://w5.foxdsgn.com/niko/classic/wp-content/themes/niko/assets/css/main.min.css?ver=5.4.2' type='text/css' media='all' />
    <script type='text/javascript' src='https://w5.foxdsgn.com/niko/classic/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>

</head>

<body>
    <div class="site-content ">

        <span class="sidebar-js"></span>
        <span class="overlay"></span>

        <div class="site-content__inner">
            <div class="container height-100">
                <div class="row height-100 overflow-hidden">

                    <div class="col-5 p-0 site-content__inner-left">
                        <div class="site-content__head">
                            <div class="left-menu ">
                                <div>
                                    <span>
                                   <a title="Home" href="#home"> <img src="profil.jfif " alt="home "></a>
                                   </span>
                                    <span>
                                    <a title="Diplomas" href="#diplomes"><img  src="educ.png " alt="Diplomas"></a>
                                </span>
                                    <span>
                                    <a title="Experiences" href="#experiences"><img src="expe.png " alt="experiences"></a>
                                </span>
                                    <span>
                                    <a title="Contact-me" href="#contact" > <img  src="call.png " alt="contact "></a>
                                    </span>
                                </div>
                                <div>
                                    <span class="socials-list">
                                   <a title ="Linkedin account" href ="https://www.linkedin.com/in/aicha-hamida/"><img src="linkedin.png " alt="linkedin "> </a>
                                </span>
                                    <span class="socials-list">
                                 <a title ="GitHub account" href ="https://github.com/Aiiishaaa" ><img src="github.png " alt="linkedin "></a>
                                </span>
                                </div>
                            </div>

                            <div class="person ">
                                <div class="person__avatar ">
                                    <img class="s-img-switch " src="a.jfif " alt="classic ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 p-0 site-content__inner-right ">

                        <div class="site-content__page">
                            <div class="site-content__page-wrap ">
                                <header id="home">
                                    <h3 class="nom_prenom text-uppercase "> Aicha HAMIDA</h3>
                                </header>

                                <div>

                                    <div class="about"> 30 ans / Développeuse Full-Stack </div>

                                    <div class="about-description ">
                                        <p>Ma réussite professionnelle étant mon objectif principal, je souhaite acquérir de l'expérience dans le domaine du développement web et mobile . Je suis capable de travailler en autonomie dans un environnement dynamique
                                            et exigeant. L'informatique a toujours été une passion et je souhaite en faire mon métier. </p>
                                        <p>Une forte motivation et des capacités d'analyse, de méthode et de rigueur m'aideront à forger mon avenir afin de devenir un bon développeur. </p>
                                    </div>

                                    <div>

                                        <h3 class="title"> Compétences </h3>

                                        <div class="Skills1">
                                            <h6>
                                                <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Prendre des initiatives dans le choix des technologies à utiliser</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Développer des applications web pour des besoins spécifiques</p>
                                                <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Adaptation rapide à de nouveaux langages et technologies</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg>Rédaction du cahier des charges technique et fonctionnel</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Création de sites sur la base du socle technique existant (nouvelles fonctionnalités, possibilité d'évolution, …)</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Bonne capacité d’analyse et de résolution de problème</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Création de sites web en environnement PHP, CMS</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Évolution et maintenance des sites existants</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Développement FrontEnd &amp; BackEnd</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                  </svg> Créer (ou intégrer) le design du site</p>
                                                <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 12l5 3V3a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10.234z"/>
                                                   </svg> Participation à l’étude ergonomique</p>
                                            </h6>
                                        </div>

                                        <div class="Skills2 container ">
                                            <p class="skill-title row">Back-end</p>
                                            <ul class="skill-list offset-1">
                                                <li>PHP / MySQL</li>
                                                <li>NodeJS / MariaDB</li>
                                                <li><abbr title="Programmation Orientée Objet">POO</abbr> / <abbr title="architecture 3 tiers : Modèle, Vue, Contrôleur">MVC</abbr></li>
                                            </ul>
                                            </li>
                                            <p class="skill-title row">Front-end</p>
                                            <ul class="skill-list offset-1">
                                                <li>HTML / CSS / JavaScript</li>
                                                <li>React / Semantic UI</li>
                                                <li>JQuery / Bootstrap</li>
                                            </ul>
                                            </li>

                                            <p class="skill-title row ">Extra</p>
                                            <ul class="skill-list offset-1">
                                                <li>Gestion de projets</li>
                                                <li>Sécurité</li>
                                                <li>Anglais technique</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>



                                <div id="diplomes" class="container ">
                                    <div class="row ">
                                        <div>
                                            <h3 class="title "> Diplômes </h3>
                                        </div>


                                        <div class="row diplomes">
                                            <div class="col-8 ">
                                                <hr size="4" color="blue">
                                                <h5> Formation Développeur WEB et WEB Mobile </h5>
                                                <p>SCIC T.E.T.R.I.S. - Grasse, 2020-2021 </p>
                                                <ul>
                                                    <li> Préparation Certification OPQUAST - SCIC T.E.T.R.I.S. -Grasse, Novembre 2020 </li>
                                                    <li> Développement de la partie <em>front-end</em> et la partie <em>back-end</em> d' une application web ou web mobile </li>
                                                    <li> Langages de programmation (HTLM,CSS, JavaScript ,PHP) </li>
                                                    <li> Maîtrise des outils et des environnements de développemen </li>
                                                    <li> <em>Framework</em> (Bootstrap, Symfony, JQuery) </li>
                                                    <li> Connaissance des méthodologies de développement <em>(méthodes agiles)</em> </li>
                                                    <li> Systéme de gestion de bases de données SQL (MySQL , MariaDB) </li>
                                            </div>
                                        </div>

                                        <div class="row diplomes">
                                            <div class=" offset-4 col-8  ">
                                                <hr size="4" color="blue">
                                                <h5> Licence Appliquée en Sciences et Technologie de L’information et des Communication </h5>
                                                <p>ISITCOM -Sousse TUNISIE, 2008-2011</p>

                                            </div>
                                        </div>

                                        <div class="row diplomes">
                                            <div class="col-10">
                                                <hr size="4" color="blue">
                                                <h5> Baccalauréat Lycée FARHAT Hached</h5>
                                                <p> M'saken TUNISIE, 2006</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="experiences">
                                    <div class="container">
                                        <div class="row">
                                            <h3 class="title"> Expériences </h3>
                                            <div class="row experiences ">
                                                <div class="col-8 ">
                                                    <hr size="4" color="blue">
                                                    <h5> Agent d'entretien Polyvalente - DFI,Golfe Juan</h5>
                                                    <p>Septembre 2015 - novembre 2016 </p>

                                                    <ul>
                                                        <li> Mettre en place des séminaires de 25 personnes environs </li>
                                                        <li> Conduite en toute sécurité des clients à l’aéroport</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row experiences">
                                                <div class="col-4">
                                                </div>

                                                <div class="col-8 ">
                                                    <hr size="4" color="blue">
                                                    <h5> Femme de chambre - Lav'tounet,Mouans-Sartoux </h5>
                                                    <p>Mai 2014 - octobre 2015 </p>
                                                    <ul>
                                                        <li> Création et entretien d’environnements propres et confortables</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row experiences">
                                                <div class="col-8">
                                                    <hr size="4" color="blue">
                                                    <h5> Technicienne de surface - Atalian,Biot </h5>
                                                    <p> Décembre 2013 - Juin 2014 </p>
                                                    <ul>
                                                        <li> Travail dans des laboratoires à accès limités</li>
                                                        <li> Respect les mesures de sécurité  et la confidentialité </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row experiences">

                                                <div class=" offset-4 col-8 ">
                                                    <hr size="4" color="blue">
                                                    <h5>Secrétaire - ATALIAN,Biot </h5>
                                                    <p>Décembre 2013 - Janvier 2014</p>
                                                    <ul>
                                                        <li>Saisie des données et création et mise à jour des dossiers des  employées en CDD & CDI </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="row experiences">
                                                <div class="col-8">
                                                    <hr size="4" color="blue">
                                                    <h5>Formatrice Bénévole - ITEC Sophia Antipolis,France</h5>
                                                    <p> Septembre 2013 - Décembre 2013</p>
                                                    <ul>
                                                        <li><em>Enseignement et formation à la micro-Informatique</em> des adhérents </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row experiences">
                                                <div class=" offset-4 col-8 ">
                                                    <hr size="4" color="blue">
                                                    <h5> Stagiaire- OACA - Aéroport International Monastir Habib Bourguiba Monastir-Skanes, Tunisie </h5>
                                                    <p>Mai 2014 - octobre 2015 </p>
                                                    <ul>
                                                        <li>Etude et test du fonctionnement d’un microphone LEM des  télécommunications aéronautiques </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row experiences">
                                                <div class="col-8">
                                                    <hr size="4" color="blue">
                                                    <h5>Stagiaire-Service AutoCom-Aeroport International Habib Bourguiba Monastir-Skanes, Tunisie</h5>
                                                    <p> Décembre 2013 - Juin 2014</p>
                                                    <ul>
                                                        <li> Formation à l'<em>assistance et dépannage de tout matériel informatique</em>du service </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="contact">
                                    <h3 class="title "> Me Contacter </h3>
                                    <div class="container-linear ">
                                        <div class="row ">

                                            <div class=" offset-1 col-10 ">
                                                <div class="row ">
                                                    <address class=" col-6"><strong> <img src="https://img.icons8.com/nolan/50/user-location.png "/> Adresse :</strong> <br>15 Avenue du grand pin<br> Antibes,FRANCE<br>
                                                                    </address>
                                                    <div class="col-6 contact-number ">
                                                        <strong>  <img src="https://img.icons8.com/nolan/64/two-smartphones.png "/> Numéro de téléphone : </strong><br> (+33) 6 18 26 71 00
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="offset-1 col-10 ">
                                                <strong> <img src="https://img.icons8.com/nolan/64/form.png "/>Envoyez-moi un message</strong>
                                                <div class="contact-form ">
                                                    <FORM  name = "formContact" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                                                        <div class='form-group'>
                                                            <label for='name'>Nom & Prénom</label>
                                                            <input type='text' name='name' class='form-control' id='name' placeholder='Exemple : Aicha HAMIDA' required=' '>
                                                        </div>

                                                        <div class='form-group '>
                                                            <label for='email '>Email</label>
                                                            <input type='email ' name='email ' class='form-control ' id='email ' placeholder='Exemple : aicha@yahoo.fr ' required=' '>
                                                        </div>

                                                        <div class='form-group '>
                                                            <label for='subject '>Sujet</label>
                                                            <input type='text ' name='subject ' class='form-control ' placeholder="Exemple : Entretien d 'embauche " id='subject ' required=' '>
                                                        </div>

                                                        <div class='form-group '>
                                                            <label for='message '>Message</label>
                                                            <textarea name='message ' class='form-control ' id='message ' rows='5 ' placeholder='Exemple : Nous aimerions vous rencontrer afin de.. ' required=' '></textarea>
                                                        </div>

                                                        <button type='submit ' name='submit ' class='btn btn-primary'>Envoyer</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="download-button ">
                                    <a class="btn btn-primary btn-lg " href="Aicha.pdf " download="CV Aicha HAMIDA ">Télécharger mon CV</a>
                                </div>
                            </div>
                        </div>
                        <script type='text/javascript ' src='https://w5.foxdsgn.com/niko/classic/wp-content/themes/niko/assets/js/libs/jquery.mCustomScrollbar.concat.min.js?ver=5.4.2 '></script>
                        <script type='text/javascript ' src='https://w5.foxdsgn.com/niko/classic/wp-content/themes/niko/assets/js/script.js?ver=5.4.2 '></script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>