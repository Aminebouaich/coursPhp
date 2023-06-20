<?php $title = "ACCUEIL"; ?>
<?php ob_start(); ?>


<main class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img4.jpg" class="card-img-top" alt="img1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img1.jpg" class="card-img-top" alt="img1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img2.jpg" class="card-img-top" alt="img2">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img3.jpg" class="card-img-top" alt="img3">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

</main>


<?php $content = ob_get_clean(); ?>
<?php require('base.php');