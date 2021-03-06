<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/8e8d5e63b3.js"></script>
    <title>Liste des animaux</title>
</head>

<?php
include('../views/inc/header.php')
?>

<body class="listeAnimauxBody">
    <div class="headerAllView">
        <h1>Liste des animaux</h1>
        <form id="form_text" action="../controllers/getSingle.php" method="POST">
            <input type="text" name="nom" placeholder="Nom de l'animal" id="nom">
            <button type="submit" value="Valider">Rechercher</button>
            <h2 class="resultatTitre">Resultats des recherches :</h2>
        </form> 
    </div>
</body>

</html>