<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Consulter la liste des films</title>
        <link rel="stylesheet" href="style/vod.css">
    </head>
    <body>
        
        <ul class="barre_de_navigation">
        <ul><a href="vod.html"><button>Revenir à la page d'acceuil</button></a>
        </ul>
        <?php
        $lignes = file("data/vod.csv");
        ?>
        <h1>Liste des acteurs</h1>
        <table>
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Année</th>
                    <th>Acteur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lignes as $uneLigne){
                    echo "<tr>";
                    $infos = explode( ":" , $uneLigne);
                    echo "<td>" . strtoupper($infos[0]) . "</td>";
                    echo "<td>" . ucfirst( strtolower( $infos[1] ) ) . "</td>";
                    echo "<td>" . ucwords( strtolower( $infos[2] ) ) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
