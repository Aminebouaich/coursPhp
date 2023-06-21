<?php $title = "ACCUEIL"; ?>
<?php ob_start(); ?>


<main class="container">
    <div class="row gy-3">
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img3.jpg" class="card-img-top" alt="Image du cours">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img1.jpg" class="card-img-top" alt="Image du cours">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img2.jpg" class="card-img-top" alt="Image du cours">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img4.jpg" class="card-img-top" alt="Image du cours">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="/coursPhp/public/assets/images/img5.jpg" class="card-img-top" alt="Image du cours">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

</main>


<?php $content = ob_get_clean(); ?>
<?php require('base.php');