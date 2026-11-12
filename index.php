<?php
    $servername = 'localhost';
    $username = "Julien Jaune";
    $password = "Bonjour je m'appelle Julien Jaune, j'adore regarder mes vidéastes préférés sur Dailymotion.";
    $database = "bdd_jeu";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn) {
        echo "Connexion  réussie ! (oui parce que y a pas de 't')(sans vouloir me moquer)(ça arrive à tout le monde de faire des fautes de frappe)";
    } else {
        die("I don't know who you are. I don't know what you want. If you are looking for ransom, I can tell you I don't have money.
        But what I do have are a very particular set of skills, skills I have acquired over a very long career. Skills that make me a nightmare for people like you.
        If you let my daughter go now, that'll be the end of it. I will not look for you, I will not pursue you. But if you don't, I will look for you, I will find you, and I will kill you.\n
        By the way voici le message d'erreur : " . mysqli_connect_error());
    }
?>
    <table>
        <tr>
            <th>Catégorie</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        <?php
    $requête = mysqli_query($conn, "SELECT catégorie, description, status FROM succès LIMIT 12");
        if($requête) {
            for ($i=0; $i < mysqli_num_rows($requête); $i++) {
                $ligne = mysqli_fetch_array($requête, MYSQLI_ASSOC);
                echo "<tr><td>" . $ligne["catégorie"] . "</td><td>" . $ligne["description"] . "</td><td>" . $ligne["status"] . "</td></tr>";
            }
        }
        ?>
    </table>
    
    <table>
        <tr>
            <th>Rareté</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        <?php
    $requête2 = mysqli_query($conn, "SELECT rareté, name, description, status FROM imemes LIMIT 12");
        if($requête2) {
            for ($i=0; $i < mysqli_num_rows($requête2); $i++) {
                $ligne = mysqli_fetch_array($requête2, MYSQLI_ASSOC);
                echo "<tr><td>" . $ligne["rareté"] . "</td><td>" . $ligne["name"] . "</td><td>" . $ligne["description"] . "</td><td>" . $ligne["status"] . "</td></tr>";
            }
        }
        mysqli_close($conn);
        ?>
    </table>
