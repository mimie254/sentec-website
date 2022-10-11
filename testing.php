<?php

function solution($input){
    $offset = 0;
    $moose = [];
    while (($pos = strpos($input, "..", $offset)) !== false) {
        $edited_input = $input;
        $offset   = $pos + 1;
        $edited_input[$pos] = "-";
        $edited_input[$pos+1] = "-";
        $moose[] = $edited_input;
    }
    print_r($moose);
}


solution("....");
