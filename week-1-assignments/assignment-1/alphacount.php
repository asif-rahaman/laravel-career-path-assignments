<?php

$sentence = $argv[1];
$alphaCount = countAlphaCharacters($sentence);
echo "Total alphabets/characters: $alphaCount\n";

function countAlphaCharacters($sentence) {
    $sentence = preg_replace('/[^a-zA-Z]/', '', $sentence);
    return strlen($sentence);
}