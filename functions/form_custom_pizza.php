<?php
$sauces = [
    'Tomato' => 2,
    'Cream' => 2,
    'Homemade premium tomato sauce' => 3
];
$toppings = [
    'Beef Meatballs' => 4,
    'Vegan Meatballs' => 4,
    'Bacon' => 2,
    'Champignons' => 2,
    'Green peppers' => 2,
    'Jalapeños' => 3,
    'Tomatoes' => 1,
    'Red onions' => 1,
    'Artichokes' => 2,
    'Mozarella Cheese' => 2
];
$supplements = [
    'Oregano' => 0.5,
    'Pesto' => 0.5,
    'Crushed red pepper' => 0,
    'Emmental cheese' => 0,
    'Extra emmental cheese' => 1,
    'Black olives' => 0.5
];

$ingredients = [];
$total = 0;
foreach (['topping', 'supplement', 'sauce'] as $name) {
    if (isset($_GET[$name])) {
        $list = $name . 's';
        $choix = $_GET[$name];
        // if it is an array ($topping, $supplement = checkbox -> array)
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($$list[$value])) { // $$var gets a var with a dynamic name (here var topping or supplement with s)
                    $ingredients[] = $value;
                    $total += $$list[$value];
                }
            }
        } else { // ($sauce = radio -> not an array)
            if (isset($$list[$choix])) {
                $ingredients[] = $choix;
                $total += $$list[$choix];
            }
        }
    }
}