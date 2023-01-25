<?php
// Server side email validation
$error = null;
$success = null;
$email = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d') . '.txt';
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = "Your email address was saved successfully";
        $email = null;
    } else {
        $error = "Invalid email address";
    }
}
$page = 'newsletter'; // footer form doesn't show on this page
require 'components' . DIRECTORY_SEPARATOR . 'header.php';

?>

<h1>Subscribe to newsletter (it's free!)</h1>
<p>Be the first to know when our new pizza recipe drops! We provide amazig news about Marseille, French & Italian cuisine and more monthly!</p>

<div class="row my-2">
    <div class="col-sm-4">
        <?php if ($error) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <?php if ($success) : ?>
            <div class="alert alert-success">
                <?= $success; ?>
            </div>
        <?php endif; ?>
        <form action="newsletter.php" method="post" class="form-inline">
            <div class="form-group">
                <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email address" required value="<?= htmlentities($email ?? ''); ?>">
                <button type="submit" class="btn btn-success">Subscribe</button>
            </div>
        </form>
    </div>
</div>


<?php require 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>