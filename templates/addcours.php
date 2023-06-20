<?php $title = "Ajouter cours"; ?>
<?php ob_start(); ?>


<main class="container">

    <main class="container">


        <h2 class="text-center mb-4">Créer un cours</h2>
        <form class=" d-flex flex-column gap-3" method="POST" action="../index.php?action=submitcours">
            <!-- Choix de pseudo -->
            <div class="form-group">Titre</label>
                <input type="text" class="form-control" id="inputAfpaId" name="" placeholder="" required value="">
            </div>
            <!-- Choix de mot de passe -->
            <div class="form-group">
                <label for="inputImage">Image </label>
                <input type="img" class="form-control" id="inputFirstName" name="firstName" placeholder="" required
                    value="">
            </div>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="" required
                    value="">
            </div>
            <div class="form-group">
                <label for="inputProgramme">Le programme</label>
                <input type="text" class="form-control" id="" name="" placeholder="" required value=" ">
            </div>
            <div class="form-group">
                <label for="inputPassword">Nombre d'heures</label>
                <input type="text" class="form-control" id="" name="" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="">Tarif</label>
                <input type="password" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Dates</label>
                <input type="date" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div>
                <label for="">Professeur</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choisir un professeur</option>
                    <option value="1">Nicolas R.</option>
                    <option value="2">Pierre C.</option>
                    <option value="3">Alexandre B.</option>
                </select>
            </div>
            <div>
                <label for="">Modalité</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choisir la modalité</option>
                    <option value="1">A distance</option>
                    <option value="2">Présentiel</option>
                    <option value="3">A distance et présentiel</option>
                </select>
            </div>
            <div>
                <label for="">Niveau requis</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>A Choisir le niveau requis</option>
                    <option value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3">Avancé</option>
                </select>
            </div>
            <!-- Bouton envoyer -->
            <button type="submit" class="btn background-gradient mt-2">Créer</button>



        </form>

    </main>
    <?php $content = ob_get_clean(); ?>
    <?php require('base.php');