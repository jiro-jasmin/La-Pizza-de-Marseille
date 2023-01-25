<?php
require_once dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'view_count.php';
add_view($file);
?>

</main>
<footer>
    <hr class="mt-0 pt-0" />
    <div class="row m-0">
        <div class="col-md-4"><strong>Jasmin Jiro / 2023</strong><br>
            <p>This website was visited <?= daily_views($file); ?> time<?= daily_views($file) > 1 ? 's' : '' ?> today.<br>
                Since the creation of this site, there has been a total of <?= total_views($file); ?> view<?= total_views($file) > 1 ? 's' : '' ?>. Thank you! </p>
        </div>
        <div class="col-md-4 my-3 my-md-0">
            <?php if (!isset($page)) : ?>
                <form action="newsletter.php" method="post" class="form-inline">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control mb-2" placeholder="Please enter your email address" required>
                        <button type="submit" class="btn btn-success mx-auto">Subscribe to newsletter</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
        <div class="col-md-4 mt-2 mt-md-0">
            <h5>Navigation</h5>
            <ul class="list-unstyled text-small">
                <?= nav_item('/public/index.php', 'Home', 'link-success') .
                    nav_menu('link-success'); ?>
            </ul>
        </div>
    </div>
</footer>

</body>

</html>