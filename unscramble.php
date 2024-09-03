<?php
// Function. Sõnade sorteerimine tähtede järgi.
function calculateWordValue($word) {
    $letters = str_split($word);
    sort($letters);
    return implode('', $letters);
}

// Sõnade massiivi lugemine.
$wordlist = file('wordlist.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Segamini aetud sõnade lugemine.
$scrambledWords = file('scrambled_words.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Assotsiatiivse massiivi loomine.
$wordValueMap = [];
foreach ($wordlist as $word) {
    $value = calculateWordValue($word);
    $wordValueMap[$value] = $word;
}

// Vastete leidmine ja esitamine.
foreach ($scrambledWords as $scrambledWord) {
    $scrambledValue = calculateWordValue($scrambledWord);

    if (isset($wordValueMap[$scrambledValue])) {
        echo "Segamini aetud sõna: $scrambledWord -> Sõna nimekirjas : " . $wordValueMap[$scrambledValue] . "\n";
    }
}

?>