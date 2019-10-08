<?php
echo "Gegroet strijder! Van welk cijfer wil je de faculteit weten?\n";
$input = readline();
$uitkomst = 1;
for ($factor = 1 ; $factor <= $input; $factor++) {
    $uitkomst = $uitkomst * $factor;
}

echo "De uitkomst is: ". $uitkomst;


