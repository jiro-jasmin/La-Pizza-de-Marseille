<?php
$title = "Our Menu / La Pizza de Marseille";
require 'components' . DIRECTORY_SEPARATOR . 'header.php';

$fichier = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv';
$lignes = file($fichier);
foreach ($lignes as $k => $ligne) {
    $lignes[$k] = explode("\t", trim($ligne)); //trim delete spaces at start and end of string
}


?>
<div class="intro">
    <h1>Our menu</h1>
    <table class="table table-striped">
        <?php foreach ($lignes as $ligne) : ?>
            <tr>
                <?php if (count($ligne) === 1) : ?>
                    <thead class="table-secondary">
                        <th colspan=2>
                            <h2><?= $ligne[0]; ?></h2>
                        </th>
                    </thead>
                <?php else : ?>
                    <td>
                        <strong><?= $ligne[0]; ?></strong>
                        <p><?= $ligne[1]; ?></p>
                    </td>
                    <td class="text-nowrap">
                        <?= number_format($ligne[2], 2, ','); ?> €
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<?php require 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>