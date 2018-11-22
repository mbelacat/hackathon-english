<!-- Form Connection Admin (Secretary/Teacher) -->
<?php
require "loginAdmin.php";

 ?>
<div class="container col-5">
    <h3 class="text-center mb-4">Espace administration</h3>
    <!-- Need ! : <form action="? .php" -->
    <form action="loginAdmin.php">
        <div class="form-group">
            <label for="first_name">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="first_name"  placeholder="Entrez votre nom d'utilisateur">
        </div>
        <div class="form-group">
            <label for="last_name">Prenom d'utilisateur</label>
            <input type="text" class="form-control" id="last_name"  placeholder="Entrez votre nom d'utilisateur">
        </div>
        <div class="form-group">
            <label for="user_password">Mot de passe</label>
            <input type="password" class="form-control" id="user_password" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>
