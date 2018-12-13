<?php
/**
 * Created by IntelliJ IDEA.
 * User: s.hitipeuw
 * Date: 06-12-18
 * Time: 15:37
 */

include "validationlib.php";
include "expected.php";


$get_params = allowed_from_get($expected_address);
var_dump($get_params);
echo "<br /><br />";


// Refactored
check_emptiness( $get_params );















// Als de parameter aanwezig is
// stop de parameter in de array met de juiste waarde
// stop de parameter in de array met waarde NULL

//function only_this_get_params($this_get_params = []) {
//
//    $allowed_get_array = [];
//
//    foreach ($this_get_params as $param) {
////        echo $param . ' key ';
//
//        if(isset($_GET[$param])) {
//            $allowed_get_array[$param] = $_GET[$param];
//        } else {
//            $allowed_get_array[$param] = NULL;
//        }
//
//    }
//
//    return $allowed_get_array;
//}


// Heeft de parameter een waarde
//function is_not_empty($value) {
//    $real_value = trim($value);
//    return isset($real_value) && $real_value !== "";
//
////        https://secure.php.net/manual/en/language.operators.comparison.php
////        https://secure.php.net/manual/en/types.comparisons.php
//
//}


// Check alle parameters die eerder toegestaan zijn
function check_emptiness($check_params = []) {

    foreach ($check_params as $item) {

        if (is_not_empty($item)) {
            echo 'value: ' . $item;
        } else {
            echo 'No value';
        }

        echo "<br />";
    }

}



