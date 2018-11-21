<!-- On charge le header -->
<?php include "../header.php"; ?>

<div class="container col-6">
<!-- form action a remplir quand toutes les pages seront crées-->
    <form action="">
        <!-- Input ou la prof inscrit la question qu'elle va poser lors du quizz -->
        <div class="form-group">
            <label for="question">Question:</label>
            <input type="text" class="form-control" id="question" placeholder="Question">
        </div>

        <!-- Input ou la prof inscrit la bonne réponse -->
        <div class="form-group">
            <label for="goodreponse">Bonne réponse:</label>
            <input type="text" class="form-control" id="goodreponse" placeholder="Bonne réponse">
        </div>

        <!-- Input ou la prof inscrit les mauvaises réponses -->
        <div class="form-group">
            <label for="badreponses">Mauvaises réponses:</label>
            <input type="text" class="form-control mb-3" id="badreponses" placeholder="Mauvaise réponse 1">
            <input type="text" class="form-control" id="badreponses" placeholder="Mauvaise réponse 2">
        </div>

        <!-- Bouton pour ajouter la question -->
        <button type="button" class="btn btn-success">Ajouter la question</button>
    </form>
</div>

<!-- On charge le footer -->
<?php include "../footer.php"; ?>