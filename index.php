<?php

// Premiere ligne

function helloworld (){
    echo "Hello World!";
}

//Deuxieme ligne

helloworld();

//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo $fname;
    return $lname;
}


maFonctionParam('Sylvie', 'Bataille');


