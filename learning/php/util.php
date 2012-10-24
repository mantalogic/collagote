<?php

$b+=1;

function add($i,$j){ // argument must filled
    return $i+$j;
}

function multiply($i=0,$j=0){ // argument can be blank*
    if(!empty($i) and !empty($j)){
        return $i*$j;
    } else {
        return “ups”;
    }
}


?>