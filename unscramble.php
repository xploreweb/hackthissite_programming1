// Read in the wordlist to an array
// Read in the scrambled words.
// Give the scrambled words a value
// Give the wordlist words a value
// Check the numbers against each other
// Print the word if you have a match

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
$scrambleWords = file('scrambled_words.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Assotsiatiivse massiivi loomine.
$wordValueMap = [];
foreach ($wordlist as $word) {
    $value = calculateWordValue($word);
    $wordValueMap[$value] = $word;
}



?>