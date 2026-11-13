<?php
    $servername = 'localhost';
    $username = "Julien Jaune";
    $password = "Bonjour je m'appelle Julien Jaune, j'adore regarder mes vidéastes préférés sur Dailymotion.";
    $database = "bdd_jeu";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn) {
        echo "Bienvenue, Admin.";
    } else {
        die("I don't know who you are. I don't know what you want. If you are looking for ransom, I can tell you I don't have money.
        But what I do have are a very particular set of skills, skills I have acquired over a very long career. Skills that make me a nightmare for people like you.
        If you let my daughter go now, that'll be the end of it. I will not look for you, I will not pursue you. But if you don't, I will look for you, I will find you, and I will kill you.\n
        By the way voici le message d'erreur : " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Passero+One&family=VT323&family=Zen+Dots&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Passero+One&family=VT323&display=swap');

            body {
                background: url("img/bg.jpg");
                background-size: cover;
            }

            .titre-1 {
                color: red;
                font-size: 60px;
                font-family: "Zen Dots", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            .titre-2 {
                color: orange;
                font_size: 35px;
                font-family: "VT323", monospace;
                font-weight: 400;
                font-style: normal;
            }

            .texte {
                color: white;
                font-size: 15px;
                font-family: "Passero One", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            .ensemble {
                display: flex;
            }

            .article {
                padding: 16px;
                border: 1px solid #000000;
                border-radius: 8px;
                background-color: #B5663680;
            }
        </style>

        <title >Succès & I-Memes de Tron</title>

    </head>
    <body>
        <h1 class="titre-1">Liste des succès & i-memes du jeu vidéo <i>TRON</i>.</h1>

        <div class="ensemble">
        
            <div class="article">

                <h2 class="titre-2">Succès</h2>

                <p class="texte">Le tableau qui suit répertorie tous les succès du jeu, ainsi que leur catégorie et leur statut.</p>

                <table>
                    <tr>
                        <th>Catégorie</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                    <?php
                $requête = mysqli_query($conn, "SELECT catégorie, description, status FROM succès");
                    if($requête) {
                        for ($i=0; $i < mysqli_num_rows($requête); $i++) {
                            $ligne = mysqli_fetch_array($requête, MYSQLI_ASSOC);
                            echo "<tr><td>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td>" . $ligne["status"] . "</td></tr>";
                        }
                    }
                    ?>
                </table>
            
            </div>

            <div class="article">
            
                <h2 class="titre-2">I-Memes</h2>

                <p class="texte">Le tableau qui suit répertorie le nom de tous les I-Memes du jeu, ainsi que leur description, leur rareté et leur statut.</p>

                <table>
                    <tr>
                        <th>Rareté</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                    <?php
                $requête2 = mysqli_query($conn, "SELECT rareté, name, description, status FROM imemes");
                    if($requête2) {
                        for ($i=0; $i < mysqli_num_rows($requête2); $i++) {
                            $ligne = mysqli_fetch_array($requête2, MYSQLI_ASSOC);
                            echo "<tr><td>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td>" . $ligne["status"] . "</td></tr>";
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </table>

            </div>

        </div>
    </body>
</html>