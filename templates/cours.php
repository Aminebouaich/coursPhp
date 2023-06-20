<?php $title = "COURS"; ?>
<?php ob_start(); ?>


<main class="container">
    <h2>Les base de PHP </h2>
    <div class="flex">
        <img src="/coursPhp/public/assets/images/img5.jpg" class="figure-img img-fluid rounded" style="width:15%"
            alt="...">
    </div>
    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est beatae, possimus quaerat velit voluptatibus
            perspiciatis quo dignissimos magni commodi aut sequi laborum autem assumenda quasi in molestias consequatur
            eveniet perferendis.</p>

    </div>
    <h3>Le programme</h3>
    <ul>
        <li>Les variable</li>
        <li>Les variable</li>
        <li>Les variable</li>
        <li>Les variable</li>
        <li>Les variable</li>
        <li>Les variable</li>
    </ul>
    <h3>Caractéristiques</h3>
    <table class="table">

        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>

            </tr>
            <tr>
                <td>Jacob</td>
                <td>Thornton</td>

            </tr>
            <tr>
                <td>Larry the Bird</td>
                <td>Thornton</td>

            </tr>
        </tbody>
    </table>


</main>
<?php $content = ob_get_clean(); ?>
<?php require('base.php');