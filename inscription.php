<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="styleInsc.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- zone de connexion -->
            <h2 class="active"> <a href="index.php">Sign in</a> </h2>

			<h2 class="nonactive">Sign up</h2>

            <form action="includes/signup.inc.php" method="POST" class="form">
                <h1>Inscription</h1>
                
                <label><b>Veuillez incrire votre nom d'utilisateur</b></label>
                <input type="text" name="username" required>
                <br>

                <label><b>Veuillez incrire votre nom</b></label>
                <input type="text" name="nom" required>
                <br>

                <label><b>Veuillez incrire votre prenom</b></label>
                <input type="text" name="prenom" required>
                <br>

                <label><b>Veuillez incrire votre adresse mail</b></label>
                <input type="text" name="mail" required>
                <br>

                <label><b>Veuillez inscrire votre mot de passe</b></label>
                <input type="password" name="password" minlength="8" required>
                <br>
                <br>
                <button class='submit' type="submit" name="submit">ENTRER</button>
            </form>
        </div>
    </body>
</html>