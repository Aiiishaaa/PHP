<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-05</title>
	 <style>
	  body{
		  text-align:center;
		  color : Red;
		  font-family:Times;
	  }
	 </style>
</head>
<body>
    <form action="resultatImpot.php" method="GET">
        <label style="margin-left:15px"> Nom :
            <input type="text" name="nom" value="<?php echo isset($_GET["nom"]) ? $_POST["nom"] : "" ?>">
            
        </label>
        <br>
        <label> Revenu :
            <input type="text" name="revenu" value="<?php echo isset($_GET["revenu"]) ? $_POST["revenu"] : "" ?>">
            
        </label>
        <br>
        <button type="submit" name="submit">OK</button>
    </form>
</body>
</html>