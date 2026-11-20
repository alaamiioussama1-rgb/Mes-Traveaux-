<?php
declare(strict_types=1);

require_once __DIR__ . "/fonctions.php";




echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;

echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;

echo "12 * 8 = " . multiplier(12, 8) . PHP_EOL;

echo "12 / 3 = " . diviser(12, 3) . PHP_EOL;

try {

    echo diviser(10, 0);

} catch (InvalidArgumentException $e) {

    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}




echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;

echo "5 est positif ? " . (estPositif(5) ? "oui" : "non") . PHP_EOL;

echo "Maximum sans max : " . maximum(12, 25, 9) . PHP_EOL;

echo "Maximum avec max : " . maximumAvecMax(12, 25, 9) . PHP_EOL;

echo "17 est premier ? " . (estPremier(17) ? "oui" : "non") . PHP_EOL;




echo "TTC : " . calculerTTC(100) . PHP_EOL;

echo "Prix apres remise : " . calculerRemise(200, 10) . PHP_EOL;

$facture = calculerFacture(100, 10, 10, 20);

echo "Facture : " . number_format($facture, 2, ",", " ") . " MAD" . PHP_EOL;



echo "Moyenne : " . moyenne(12, 15, 18) . PHP_EOL;

echo "Aire cercle : " . aireCercle(5) . PHP_EOL;

echo "Perimetre cercle : " . perimetreCercle(5) . PHP_EOL;

echo "25 Celsius : " . celsiusVersFahrenheit(25) . " Fahrenheit" . PHP_EOL;

echo "77 Fahrenheit : " . fahrenheitVersCelsius(77) . " Celsius" . PHP_EOL;

echo "100 MAD en EUR : " . convertirDevise(100, 0.092) . PHP_EOL;



echo "5! = " . factorielle(5) . PHP_EOL;

echo "Fibonacci(8) : " . implode(", ", fibonacci(8)) . PHP_EOL;

echo "PGCD(48, 18) = " . pgcd(48, 18) . PHP_EOL;

echo "Puissance : " . puissance(2, 4) . PHP_EOL;

echo "Puissance recursive : " . puissanceRecursive(2, 4) . PHP_EOL;

?>