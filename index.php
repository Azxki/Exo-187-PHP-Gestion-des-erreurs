<?php

/**
 * 1. Faites fonctionner ce code ! Utilisez
 */

/**
 * Effectue une division entre deux nombres donnés.
 * @param int $number
 * @param int $by
 * @return float|int
 * @throws Exception
 */
// !!!! Ne touchez pas à ce code.
function divide(int $number, int $by) {
    if( $by === 0 || $number === 0) {
        throw new Exception("Erreur, division par 0 impossible");
    }
    return $number / $by;
}

// TODO Compléter le code en fournissant un OU deux zéro en paramètre de la fonction divide !
try {
    // Corrigez moi ( si je me trompe ! ).
    $result = divide(0, 0);
    // Afficher la variable $result.
    return $result;
}
catch(Exception $e) {
    echo "Un script essentiel n'a pas pu être trouvé <br>";
    echo "Message : " . $e->getMessage() . "<br>";
    echo "Code : " . $e->getCode() . "<br>";
    echo "File : " . $e->getFile() . "<br>";
    echo "Line : " . $e->getLine() . "<br>";
}