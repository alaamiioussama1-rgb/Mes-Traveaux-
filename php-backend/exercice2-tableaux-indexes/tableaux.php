<?php
declare(strict_types=1);

// Les données initiales
$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija'];



echo "===== ETAPE 1 : Lecture et parcours =====\n";


echo "Premiere note : " . $notes[0] . "\n";

$dernierIndice = count($notes) - 1;
echo "Derniere note : " . $notes[$dernierIndice] . "\n";

echo "Nombre de notes : " . count($notes) . "\n";

echo "\nParcours avec for :\n";

for ($i = 0; $i < count($notes); $i++) {
    echo "Note n°" . ($i + 1) . " : " . $notes[$i] . "\n";
}


echo "\nParcours avec foreach :\n";

foreach ($notes as $i => $note) {
    echo "Note n°" . ($i + 1) . " : " . $note . "\n";
}


echo "\nListe des prenoms :\n";

foreach ($prenoms as $i => $prenom) {
    echo ($i + 1) . ". " . $prenom . "\n";
}



echo "\n===== ETAPE 2 : Ajouter, retirer, inserer =====\n";

$notes2 = $notes;


$notes2[] = 16;

array_push($notes2, 16);

echo "Apres ajout : ";
print_r($notes2);


array_unshift($notes2, 10);

echo "Apres ajout au debut : ";
print_r($notes2);


$derniere = array_pop($notes2);
echo "Note retiree a la fin : " . $derniere . "\n";

$premiere = array_shift($notes2);
echo "Note retiree au debut : " . $premiere . "\n";

array_splice($notes2, 2, 0, [13]);

echo "Apres insertion de 13 : ";
print_r($notes2);


unset($notes2[1]);

echo "Apres unset : ";
print_r($notes2);


$notes2 = array_values($notes2);

echo "Apres array_values : ";
print_r($notes2);




echo "\n===== ETAPE 3 : Recherche =====\n";

if (in_array(17, $notes)) {
    echo "La note 17 existe.\n";
} else {
    echo "La note 17 n'existe pas.\n";
}

$indice = array_search(9, $notes);

if ($indice !== false) {
    echo "La note 9 existe a l'indice : " . $indice . "\n";
} else {
    echo "La note 9 n'existe pas.\n";
}
if (in_array("Omar", $prenoms)) {
    echo "Omar existe dans la liste.\n";
} else {
    echo "Omar n'existe pas dans la liste.\n";
}



echo "\n===== ETAPE 4 : Statistiques =====\n";

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
$minimum = min($notes);
$maximum = max($notes);

echo "Somme : " . $somme . "\n";
echo "Moyenne : " . round($moyenne, 2) . "\n";
echo "Note minimale : " . $minimum . "\n";
echo "Note maximale : " . $maximum . "\n";


$nombreAdmis = 0;

foreach ($notes as $note) {
    if ($note >= 10) {
        $nombreAdmis++;
    }
}

echo "Nombre des admis avec boucle : " . $nombreAdmis . "\n";


$admisFiltre = array_filter($notes, fn($note) => $note >= 10);

echo "Nombre des admis avec array_filter : " . count($admisFiltre) . "\n";


$pourcentage = ($nombreAdmis / count($notes)) * 100;

echo "Pourcentage de reussite : " . round($pourcentage, 2) . "%\n";

$notesTriees = $notes;

sort($notesTriees);

$nombre = count($notesTriees);
$milieu = intdiv($nombre, 2);

if ($nombre % 2 == 0) {
    $mediane = ($notesTriees[$milieu - 1] + $notesTriees[$milieu]) / 2;
} else {
    $mediane = $notesTriees[$milieu];
}

echo "Mediane : " . $mediane . "\n";



echo "\n===== ETAPE 5 : Tri et extraction =====\n";


$croissant = $notes;

sort($croissant);

echo "Tri croissant : ";
print_r($croissant);


$decroissant = $notes;

rsort($decroissant);

echo "Tri decroissant : ";
print_r($decroissant);

$meilleuresNotes = $decroissant;

$troisMeilleures = array_slice($meilleuresNotes, 0, 3);

echo "Les 3 meilleures notes : ";
print_r($troisMeilleures);


$prenomsTries = $prenoms;

sort($prenomsTries);

echo "Prenoms tries : ";
print_r($prenomsTries);


$prenomsInverses = array_reverse($prenomsTries);

echo "Prenoms inverses : ";
print_r($prenomsInverses);




echo "\n===== ETAPE 6 : Transformation =====\n";

$bonus = array_map(fn($note) => min($note + 1, 20), $notes);

echo "Notes avec bonus : ";
print_r($bonus);

$notesAdmis = array_filter($notes, fn($note) => $note >= 10);

$notesAdmis = array_values($notesAdmis);

echo "Notes des admis : ";
print_r($notesAdmis);


$total = array_reduce(
    $notes,
    fn($cumul, $note) => $cumul + $note,
    0
);

echo "Total avec array_reduce : " . $total . "\n";


$prenomsMajuscules = array_map("strtoupper", $prenoms);

echo "Prenoms en majuscules : ";
print_r($prenomsMajuscules);


$mentions = array_map(function ($note) {
    if ($note < 10) {
        return $note . " -> Ajourne";
    } elseif ($note < 14) {
        return $note . " -> Passable";
    } elseif ($note < 16) {
        return $note . " -> Assez bien";
    } else {
        return $note . " -> Bien";
    }
}, $notes);

echo "Mentions :\n";

foreach ($mentions as $mention) {
    echo $mention . "\n";
}



echo "\n===== ETAPE 7 : Chaines, fusion et ensembles =====\n";


$chainePrenoms = implode(", ", $prenoms);

echo "Prenoms : " . $chainePrenoms . "\n";

$chaine = "php,js,sql,php,html,js";

$langages = explode(",", $chaine);

$langagesUniques = array_unique($langages);

echo "Langages sans doublons : ";
print_r($langagesUniques);

$a1 = ["php", "sql"];
$b1 = ["js", "sql"];

$fusion = array_merge($a1, $b1);

$fusion = array_unique($fusion);

echo "Fusion dedoublonnee : ";
print_r($fusion);


$a = ["php", "js", "sql"];
$b = ["js", "html", "sql"];

$communs = array_intersect($a, $b);

$differents = array_diff($a, $b);

echo "Elements communs : ";
print_r($communs);

echo "Elements uniquement dans A : ";
print_r($differents);

$nombres = range(1, 10);

$paquets = array_chunk($nombres, 3);

echo "Paquets de 3 : ";
print_r($paquets);



function moyenne(array $notes): float
{
    if (count($notes) == 0) {
        return 0.0;
    }

    return array_sum($notes) / count($notes);
}


function mediane(array $notes): float
{
    if (count($notes) == 0) {
        return 0.0;
    }

    sort($notes);

    $nombre = count($notes);
    $milieu = intdiv($nombre, 2);

    if ($nombre % 2 == 0) {
        return ($notes[$milieu - 1] + $notes[$milieu]) / 2;
    }

    return (float) $notes[$milieu];
}

function admis(array $notes, float $seuil = 10): array
{
    return array_values(
        array_filter($notes, fn($note) => $note >= $seuil)
    );
}

function meilleures(array $notes, int $n = 3): array
{
    rsort($notes);

    return array_slice($notes, 0, $n);
}


function histogramme(array $notes): void
{
    foreach ($notes as $note) {
        echo $note . " : " . str_repeat("*", $note) . "\n";
    }
}



echo "\n===== TEST DES FONCTIONS =====\n";

echo "Moyenne : " . round(moyenne($notes), 2) . "\n";

echo "Mediane : " . mediane($notes) . "\n";

echo "Admis : ";
print_r(admis($notes));

echo "Meilleures notes : ";
print_r(meilleures($notes));

echo "Histogramme :\n";
histogramme($notes);


echo "\n===== TEST TABLEAU VIDE =====\n";

$vide = [];

echo "Moyenne : " . moyenne($vide) . "\n";

echo "Mediane : " . mediane($vide) . "\n";

echo "Admis : ";
print_r(admis($vide));

echo "Meilleures notes : ";
print_r(meilleures($vide));

echo "Histogramme :\n";
histogramme($vide);

?>