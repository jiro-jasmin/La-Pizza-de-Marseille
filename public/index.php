<?php
$title = "La Pizza de Marseille / Genuine Italian restaurant in the center of Marseille";
require_once  dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'form.php';
require_once  dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'form_custom_pizza.php';
require 'components' . DIRECTORY_SEPARATOR . 'header.php';
?>

<!-- Page HTML -->
<div class="intro my-0">
    <div class="container">
        <div class="row">
            <div class="col-7 d-none d-sm-none d-md-block"></div>
            <div class="col-12 col-sm-12 col-lg-5 mt-5">
                <h1>Welcome to Marseille's best pizza restaurant!</h1>
                <p class="fs-4 mt-5">Renewing Italian cuisine since 1996<br>
                    Our award-winning pizzas available at the best price for you, in the center of the Mediterraneen city.
                    Enjoy the view of the French Vieux Port while appreciating the flavours of Italy.
                    We only take reservation on telephone.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="tel:012345678" class="my-2 btn btn-success">Call us at 012-345-678</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="custom">
    <div class="d-flex justify-content-center align-items-center flex-wrap">
        <h1 class="mt-3 text-center">Make your <br>custom pizza</h1>
        <img src="./assets/images/pizza-sauces.webp" alt="Pizza sauces" height="300px">
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="/public/index.php#custom" method="GET" class="mb-3">
                <h3>Sauce</h3>
                <?php foreach ($sauces as $sauce => $prix) : ?>
                    <div class="form-group">
                        <label>
                            <?= radio('sauce', $sauce, $_GET, true); ?>
                            <?= $sauce ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach; ?><br>
                <h3>Toppings</h3>
                <?php foreach ($toppings as $topping => $prix) : ?>
                    <div class="form-group">
                        <label>
                            <?= checkbox('topping', $topping, $_GET); ?>
                            <?= $topping ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach; ?><br>


                <h3>Extras</h3>
                <?php foreach ($supplements as $supplement => $prix) : ?>
                    <div class="form-group">
                        <label>
                            <?= checkbox('supplement', $supplement, $_GET); ?>
                            <?= $supplement ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach; ?><br>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <h5 class="card-title m-2">Your custom-made pizza</h5>
                <ul class="list-group list-group-flush m-2">
                    <?php foreach ($ingredients as $ingredient) : ?>
                        <li class="list-group-item"><?= $ingredient ?></li>
                    <?php endforeach; ?>
                </ul>
                <h5 class="card-title mt-2 ms-2">Total</h5>
                <p class="card-text m-2">
                    <?= $total ?> €
                </p>
            </div>
        </div>
        <p class="lead">Once you have created your pizza, be sure to call us and tell us all about your choice!</p>
    </div>
</div>
<div class="text-center bg-dark mt-2 p-4">
    <p class="text-light">Wanna be sure we are open before visiting ?</p>
    <a href="/public/contact.php" class="my-2 btn btn-success">Check our opening hours</a>
</div>
<?php require 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>