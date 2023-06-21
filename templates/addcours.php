<?php $title = "Ajouter cours"; ?>
<?php ob_start(); ?>


<main class="container">

    <h2 class="text-center mb-4">Créer un cours</h2>
    <form class=" d-flex flex-column gap-3" method="POST" action="../index.php?action=submitcours">

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="short-description" class="form-label">Description courte</label>
            <input type="text" class="form-control" id="short-description">
        </div>
        <div class="mb-3">
            <label for="long-description" class="form-label">Description</label>
            <textarea class="form-control" id="long-description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="program-content" class="form-label">Le programme</label>
            <textarea class="form-control" id="program-content" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="number-of-hours" class="form-label">Nombre d'heures</label>
            <input type="text" class="form-control" id="number-of-hours">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Tarif</label>
            <input type="text" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="dates" class="form-label">Dates</label>
            <input type="text" class="form-control" id="dates">
        </div>
        <div class="mb-3">
            <label for="professor" class="form-label">Professeur</label>
            <select id="professor" class="form-select">
                <option value="">Choisir un professeur</option>
                <option value="1">Nicolas R.</option>
                <option value="2">Jérémy P.</option>
                <option value="3">Pierre C.</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="modality" class="form-label">Modalité</label>
            <select id="modality" class="form-select">
                <option value="">Choisir une modalité</option>
                <option value="1">A distance</option>
                <option value="2">Présentiel</option>
                <option value="3">A distance et présentiel</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="required-level" class="form-label">Niveau requis</label>
            <select id="required-level" class="form-select">
                <option value="">Choisir le niveau requis</option>
                <option value="1">Débutant</option>
                <option value="2">Intermédiaire</option>
                <option value="3">Avancé</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Créer le cours">
    </form>

</main>
<?php $content = ob_get_clean(); ?>
<?php require('base.php');