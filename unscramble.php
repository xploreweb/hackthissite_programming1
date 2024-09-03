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

?>