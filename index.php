<?php

function writeSecretSentence(string $animal, string $element): string{
    $sentence = "L'animal sincline vers $element";
    return $sentence;
}

$secretSentence1 = writeSecretSentence("Le Loup", "La Lune ");
echo $secretSentence1;
$secretSentence2 = writeSecretSentence("Le singe", "Le feu");
echo $secretSentence2;
