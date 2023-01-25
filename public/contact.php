<?php
$title = "Opening hours and reservation / La Pizza de Marseille";
require_once (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'config.php';
require_once (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'hours.php';
date_default_timezone_set('Europe/Paris');
$hour = (int)date('G'); // get current time according to timezone I set on previous line
$time_slots = TIME_SLOTS[date('N') - 1]; // get todays opening hours
$open = in_time_slots($hour, $time_slots); // bool: get opening state
$color = $open ? 'var(--bs-success);' : 'var(--bs-danger);';
require 'components' . DIRECTORY_SEPARATOR . 'header.php';
?>

<div class="second-bg my-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Contact us</h1>
                <p class="lead">Our shop is located at the following address: </p>
                <p class="lead">123 La Canebiere 13001 Marseille, France</p>
                <p class="lead">If you would like to make a reservation, please note that we only allow take them by telephone.
                    Our staff will be happy to answer all of your questions both in French and in English, so do not hesitate to contact us.
                </p>
                <div class="d-flex justify-content-center">
                    <a href="tel:012345678" class="my-2 btn btn-success">Call us at 012-345-678</a>
                </div>

            </div>
            <div class="card col-lg-4 my-2">
                <div class="card-body">
                    <h4 class="card-title">Horaires d'ouverture</h3>
                        <?php if ($open) : ?>
                            <div class="alert alert-success">
                                Our shop is currently open.
                            </div>
                        <?php else : ?>
                            <div class="alert alert-danger">
                                Our shop is currently closed.
                            </div>
                        <?php endif; ?>
                        <ul class="list-group">
                            <?php foreach (DAYS as $key => $jour) : ?>
                                <!-- $key+1 bc array starts at 0, but date() function returns an array where days start at 1 -->
                                <li class="list-group-item" <?php if ($key + 1 === (int)date('N')) : ?> style="color:<?= $color; ?>" <?php endif; ?>>
                                    <strong><?= $jour ?></strong> :
                                    <?= time_slots_html(TIME_SLOTS[$key]); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>