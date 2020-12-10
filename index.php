<?php

declare(strict_types=1);


$allergens2 = ['alergen1', 'alergen2', 'alergen5'];
"<h1> collab change </h1>";

$html2 = '<h1>This is dev</h1>
            <p>alergen2</p>
            <p>This is a paragraph.</p>
            <p>This is a paragraph.</p>
            <p>alergen2</p>
            <p>This is a paragraph.</p>
            <p>alergen1</p>
		 <p>alergen4</p>';


function boldWords(string $html, array $allergens): string {

    $items = explode(' ', $html);
    // var_dump($items);
    foreach ($items as &$item) {
        foreach ($allergens as $allergen) {
            if (substr_count($item, $allergen)) {
                if (!preg_match("'/^<b>.+</b>$/'", $item)) {
                    // array_push($x, "<b>$item</b>");
                    $item = "<b>$item</b>";
                }
            }
        }
    }
    return implode(' ', $items);
}

echo boldWords($html2, $allergens2);
