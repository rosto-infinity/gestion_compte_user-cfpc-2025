<?php

/**
 * Fonction qui permet de generer un token aléatoire de longueur $length
 * @param int $length
 * @return string
 */
 function generateToken ($length) {
    $alphanum= array_merge(range(0, 9), range('a', 'z'), range('A', 'Z')); 
    $alphanumString = implode('', $alphanum); 
    return substr(str_shuffle(str_repeat($alphanumString,$length)), 0, $length);  
 }