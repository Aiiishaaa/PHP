<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Ex1 Niv4</title>
    <style>
        h1 {
            font-size: 80px;
            color: red;
            text-align:center;
        }
        
        ul {
       font-size: 30px;
       padding-left: 100px;
        }
        li{
       padding-bottom:10px;
        }
        p {
            padding-left: 50px;
            font-family:Arial;
            font-size:35px;
        }
        div{
              margin-left:250px;
              font-family: Times;
              font-size:30px;
              color :green;
         }
    </style>
</head>

<body>

    <h1> Enoncé :</h1>

    <ul>
    <li>Créez une classe nommée form représentant un formulaire HTML.</li>
    <li>Le constructeur doit créer le code d’en-tête du formulaire en utilisant les éléments "form" et "fieldset".</li>
    <li>Une méthode <b>settext()</b> doit permettre d’ajouter une zone de texte.</li>
    <li>Une méthode <b>setsubmit()</b> doit permettre d'ajouter un bouton d’envoi. </li>
    <li>Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants. </li>
    <li> La méthode <b>getform()</b> doit retourner tout le code HTML de création du formulaire.</li>
    <li> Créez des objets form, et ajoutez-y deux zones de texte et un bouton d’envoi. Testez l’affichage obtenu.</li>
    <li> Le fichier contenant la définition de la classe form (dont le squelette vous est fourni ci-dessous) est indépendant du fichier qui permettra de le tester. Il faudra donc inclure (include) ce fichier dans le fichier PHP destiné à utiliser cette classe.</li>
    <li> Le code du fichier de test vous est fourni ci-dessous, vous ajusterez le nom du fichier php à inclure en fonction du nom que vous avez donné au vôtre.</li>
    </ul>


<p>Fichier de test incluant le fichier précédent et qui creé un objet de type form. </p>
        <?php
            include('class_form.php');
            //***************************
                    $myform = new form("traitement.php","Accès au site","post");
                    $myform->settext("nom","Votre nom :  ");
                    $myform->settext("code","Votre code : ");
                    $myform->setsubmit();
                    $myform->getform();
        ?>

<p> A vous de compléter les méthodes de la classe form afin d'obtenir le résultat suivant lors de l'appel à $myform->getform() dans l'exemple ci-dessus :</p>

        <form action="traitement.php" method="post">
            <fieldset>
                <legend><span>Accès au site</span></legend>
                <span>Votre nom :  </span><input type="text" name="nom" /><br /><br />
                <span>Votre code : </span><input type="text" name="code" /><br /><br />
                <input type="submit" name="envoi" value="Envoyer"/><br />
            </fieldset>
        </form>

</body>
</html>