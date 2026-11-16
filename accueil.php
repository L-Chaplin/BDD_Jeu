<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Passero+One&family=VT323&family=Zen+Dots&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Passero+One&family=VT323&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap');

            
            body {
                background: url("img/bg.jpg");
                background-size: cover;
                text-align: center;
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
                font-size: 35px;
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
                justify-content: center;
                display: flex;
                height: 100%;
                width: 100%;
            }

            .partie-1 {
                align-items: center;
                justify-content: center;
                margin-right: 75px;
            }

            .partie-2 {
                align-items: center;
                justify-content: center;
            }

            .article {
                padding: 16px;
                border: 1px solid #000000;
                border-radius: 8px;
                background-color: #B5663680;
                height: fit-content;
                width: fit-content;
            }

            .titre-table {
                font-style: italic;
                color: #00A2CF;
                font-family: "Science Gothic", sans-serif;
                font-optical-sizing: auto;
                font-style: normal;
                font-variation-settings:
                    "slnt" 0,
                    "wdth" 100,
                    "CTRS" 0;
            }

            .valeurs-table {
                color: #FFFFFF;
                font-family: "Space Grotesk", sans-serif;
                font-optical-sizing: auto;
                font-style: normal;
            }

            .temps {
                color: #A9BD04;
            }

            .score {
                color: #9204BD;
            }

            .frôlements {
                color: #917129;
            }

            .collectibles {
                color: #1AA607;
            }

            .rare {
                color: #17C4E3;
            }

            .épique {
                color: #522496;
            }

            .légendaire {
                color: #CF931B;
            }

            .status-r {
                font-weight: bold;
                color: #E01F07; 
            }

            .status-v {
                font-weight: bold;
                color: #079C03;
            }
        </style>

        <title >Succès & I-Memes de Tron</title>

    </head>
    <body>
        <?php
            $servername = 'localhost';
            $username = "Julien Jaune";
            $password = "Bonjour je m'appelle Julien Jaune, j'adore regarder mes vidéastes préférés sur Dailymotion.";
            $database = "bdd_jeu";

            $conn = mysqli_connect($servername, $username, $password, $database);
        ?>
        <h1 class="titre-1">Liste des succès & i-memes du jeu vidéo <i>TRON</i>.</h1>

        <div class="ensemble">

            <div class="partie-1">
            
                <h2 class="titre-2">Succès</h2>
            
                <p class="texte">Le tableau qui suit répertorie tous les succès du jeu, ainsi que leur catégorie et leur statut.</p>

                <div class="article">

                    <table>
                        <tr class="titre-table">
                            <th>Catégorie</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                        <?php
                    $requête = mysqli_query($conn, "SELECT catégorie, description, status FROM succès");
                        if($requête) {
                            for ($i=0; $i < mysqli_num_rows($requête); $i++) {
                                $ligne = mysqli_fetch_array($requête, MYSQLI_ASSOC);
                                if ($ligne["catégorie"] == "Temps") {
                                    if ($ligne["status"] == "Non Accompli") {
                                        echo "<tr class='valeurs-table'><td class='temps'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Accompli") {
                                        echo "<tr class='valeurs-table'><td class='temps'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                                if ($ligne["catégorie"] == "Score") {
                                    if ($ligne["status"] == "Non Accompli") {
                                        echo "<tr class='valeurs-table'><td class='score'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Accompli") {
                                        echo "<tr class='valeurs-table'><td class='score'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                                if ($ligne["catégorie"] == "Frôlements") {
                                    if ($ligne["status"] == "Non Accompli") {
                                        echo "<tr class='valeurs-table'><td class='frôlements'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Accompli") {
                                        echo "<tr class='valeurs-table'><td class='frôlements'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                                if ($ligne["catégorie"] == "Collectibles") {
                                    if ($ligne["status"] == "Non Accompli") {
                                        echo "<tr class='valeurs-table'><td class='collectibles'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Accompli") {
                                        echo "<tr class='valeurs-table'><td class='collectibles'>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                            }
                        }
                        ?>
                    </table>
                
                </div>

            </div>

            <div class="partie-2">

                <h2 class="titre-2">I-Memes</h2>

                <p class="texte">Le tableau qui suit répertorie le nom de tous les I-Memes du jeu, ainsi que leur description, leur rareté et leur statut.</p>

                <div class="article">

                    <table>
                        <tr class="titre-table">
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
                                if ($ligne["rareté"] == "Rare") {
                                    if ($ligne["status"] == "Non Possede") {
                                        echo "<tr class='valeurs-table'><td class='rare'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Possede") {
                                        echo "<tr class='valeurs-table'><td class='rare'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                                if ($ligne["rareté"] == "Epique") {
                                    if ($ligne["status"] == "Non Possede") {
                                        echo "<tr class='valeurs-table'><td class='épique'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Possede") {
                                        echo "<tr class='valeurs-table'><td class='épique'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                                if ($ligne["rareté"] == "Légendaire") {
                                    if ($ligne["status"] == "Non Possede") {
                                        echo "<tr class='valeurs-table'><td class='légendaire'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-r'>" . $ligne["status"] . "</td></tr>";
                                    }
                                    if ($ligne["status"] == "Possede") {
                                        echo "<tr class='valeurs-table'><td class='légendaire'>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td class='status-v'>" . $ligne["status"] . "</td></tr>";
                                    }
                                }
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </table>

                </div>

            </div>

        </div>
    </body>
</html>