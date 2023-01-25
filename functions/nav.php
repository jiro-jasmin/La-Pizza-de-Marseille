<?php

function nav_item(string $lien, string $titre, string $classe = ''): string
{
    if ($classe != '') {
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe .= ' active';
        }
    }

    return <<<HTML
    <li class="nav-item">
        <a class="$classe" href="$lien">$titre</a>
        </li>
HTML;
}

function nav_menu(string $classe = ''): string
{
    return
        nav_item('/public/menu.php', 'Menu', $classe) .
        nav_item('/public/contact.php', 'Contact', $classe);
}