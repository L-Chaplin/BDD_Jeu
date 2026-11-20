<!DOCTYPE html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap');

        body {
            background: url("img/bg.jpg");
            background-size: cover;
            text-align: center;
        }

        #connexion {
            color: #FFFFFF;
            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .article {
            justify-content: center;
            display: flex;
            height: 100%;
            width: 100%;
        }

        .article2 {
            padding: 80px;
            border: 1px solid #000000;
            border-radius: 8px;
            background-color: #7520AB80;
            height: auto;
            width: auto;
        }

        .txt {
            color: #FFFFFF;
            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            padding: 20px;
            border: 1px solid #000000;
            border-radius: 15px;
            background-color: #B5663680;
            height: fit-content;
            width: fit-content;
            margin-top: 50px;
        }

        .txt-sans-margin {
            color: #FFFFFF;
            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            padding: 20px;
            border: 1px solid #000000;
            border-radius: 15px;
            background-color: #B5663680;
            height: fit-content;
            width: fit-content;
        }

        #error {
            color: #FF0000;
            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
</head>
<body>
    <?php
        $servername = 'localhost';
        $username = "Julien Jaune";
        $password = "Bonjour je m'appelle Julien Jaune, j'adore regarder mes vidéastes préférés sur Dailymotion.";
        $database = "bdd_jeu";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn) {
            echo "<p id='connexion'>Bienvenue, Admin.</p>";
        } else {
            die("<p id='connexion'>I don't know who you are. I don't know what you want. If you are looking for ransom, I can tell you I don't have money.
            But what I do have are a very particular set of skills, skills I have acquired over a very long career. Skills that make me a nightmare for people like you.
            If you let my daughter go now, that'll be the end of it. I will not look for you, I will not pursue you. But if you don't, I will look for you, I will find you, and I will kill you.\n
            By the way voici le message d'erreur : " . mysqli_connect_error() . "</p>");
        }


        $req = mysqli_query($conn, "SELECT username, password FROM Users WHERE grade = 1 LIMIT 1");
        if ($req) {
            for ($i=0; $i < mysqli_num_rows($req); $i++) {
                $ligne = mysqli_fetch_array($req, MYSQLI_ASSOC);
                if ($ligne["username"] == $_POST["id"] && $ligne["password"] == $_POST["mdp"]) {
                    header('Location:https://localhost/BDD_Jeu/accueil.php');
                }
            }
        }
    ?>
    <div class="article">
        <div class="article2">
            <form action="" method="post">
                <div class="txt-sans-margin">
                    <label for="id">Identifiant :</label>
                    <input name="id" id="id" type="text">
                </div>
                <div class="txt">
                    <label for="mdp">Mot de passe :</label>
                    <input name="mdp" id="mdp" type="password">
                </div>
                <div class="txt">
                    <button type="submit">Valider</button>
                </div>
            </form>
        </div>
    </div>
</body>