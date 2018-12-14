<?php
/**
 * Created by IntelliJ IDEA.
 * User: s.hitipeuw
 * Date: 07-12-18
 * Time: 07:59
 */

// Als de parameter aanwezig is
// stop de parameter in de array met de juiste waarde
// stop de parameter in de array met waarde NULL

// Refactored function name
function allowed_from_get($allowed_incoming_params = []) {

    // refactored name from $allowed_array to $allowed_array
    $allowed_array = [];

    foreach ($allowed_incoming_params as $param) {

        if(isset($_GET[$param])) {
            $allowed_array[$param] = $_GET[$param];
        } else {
            $allowed_array[$param] = NULL;
        }

    }

    return $allowed_array;
}


// Heeft de parameter een waarde
function is_not_empty($value) {
    $real_value = trim($value);
    return isset($real_value) && $real_value !== "";

//        https://secure.php.net/manual/en/language.operators.comparison.php
//        https://secure.php.net/manual/en/types.comparisons.php

}



/*
 * Hieronder zijn een tweetal validation functions gegeven,
 * maak deze af.
 *
 * Vul je validation library met meer validation functions.
 *
 * Gebruik je checklist om
 * nog meer verschillende validation functions aan te maken.
 *
 */

function is_expected_type($value, $variable_type ) {

    // check het verwachte type: string, boolean, etc
    // maak zonodig aparte functies voor het checken van type

    // bedenkt wat de return value moet zijn
    // return .....;
}

function is_expected_format($value, $format) {
    // check het verwachte format:
    // maak zonodig aparte functies voor het checken van format
    // Voorbeelden format: is het een adres, email, postcode, datum, etc.

    // bedenkt wat de return value moet zijn
    // return .....;
}


