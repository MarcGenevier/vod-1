<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Informations sur le film</title>
        <link rel="stylesheet" href="style/vod.css">
    </head>
    <body>
        
        <ul class="barre_de_navigation">
			
			<ul><a href="vod.html"><button>Revenir à la page d'acceuil</button></a>
            <br>
            <a href="saisieTitreRecherche.html"><button>Rechercher un nouveau film</button></a>

        </ul>
        <h1>Informations sur le film</h1>
        <?php
        $films = file("data/vod.csv");
        $trouver = false;
        foreach($films as $n => $film){
            list($nomFilm,$annee,$rea) = explode(":", $film);
           

            if(strtolower(trim($nomFilm)) == strtolower(trim($_POST["nomFilm"]))){
                echo "Le nom du film : ". "<b>" . $nomFilm . "</b><br/>";
                echo "L'année de création du film : ".$annee . "<br/>";
                echo "Le nom du réalisateur : ".$rea . "<br/>";
                $trouver = true;
                break;
            }
            $trouver = false;
        }
        if(!$trouver){
            echo "Le film que vous rechercher n'est pas dans la liste ";
        }
        ?>
