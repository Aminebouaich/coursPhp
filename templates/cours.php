<?php $title = "COURS"; ?>
<?php ob_start(); ?>


<main class="container">
    <h2>Les base de PHP </h2>
    <div class="row">
        <div class="col">
        </div>
        <div class="col text-end">
            <span class="badge bg-success">70h</span>
            <span class="badge bg-warning">540€</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="https://picsum.photos/600/300" alt="Image du cours">
        </div>
        <div class="col-md-6">
            <p>
                Notre programme a été pensé pour les néophytes. En d’autres termes, pas besoin d’avoir dévoré moults
                bouquins sur le code ou d’avoir essayé tous les MOOCs possibles pour faire bonne figure dans cette
                formation. Mais si vous disposez de quelques bases, c’est toujours mieux, on va pas se mentir.
            </p>
            <p>
                Avec ce nouveau langage, on apprend à programmer nos premières fonctionnalités pour apporter de la
                vie dans nos pages web. Ces deux semaines ne sont pas de tout repos mais nous permettent d’apprendre
                à réaliser de bout en bout un site dynamique et fonctionnel.
            </p>
        </div>
    </div>

    <h2>Le programme</h2>
    <ul>
        <li>Les variables</li>
        <li>Les conditions</li>
        <li>Les boucles</li>
        <li>Les tableaux</li>
        <li>Les classes</li>
        <li>Interaction avec une base de données</li>
    </ul>

    <h2>Caractéristiques</h2>
    <table class="table table-striped">
        <tr>
            <td>Dates</td>
            <td>14/03/2022 au 18/03/2022</td>
        </tr>
        <tr>
            <td>Votre prof</td>
            <td>Pierre C.</td>
        </tr>
        <tr>
            <td>Durée</td>
            <td>70h</td>
        </tr>
        <tr>
            <td>Modalité</td>
            <td>A distance</td>
        </tr>
        <tr>
            <td>Niveau requis</td>
            <td>Débutant</td>
        </tr>
    </table>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('base.php');