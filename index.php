<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- zone de connexion -->
				<h2 class="active"> Sign in </h2>

				<h2 class="nonactive"><a href="inscription.php">Sign up</a> </h2>
            
            <form action="includes/login.inc.php" method="POST" class="form">
                <h1>Connexion</h1>
                
                <label><b class="titre">Nom d'utilisateur</b></label>
				<br>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
				<br>
				<br>

                <label><b class="titre">Mot de passe</b></label><br>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>
				<br>
				<br>
                <button class="button-btn" name="submit" type ="submit">CONNEXION</button> 
            </form>
    </div>
    </body>
</html>