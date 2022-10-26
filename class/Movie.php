<?php

class Movie {

// VARIABILI D'ISTANZA
public $title;
public $length = "";
public $language = "";
public $genre = "";
public $type = "";
public $actors = [];

// COSTRUTTORE
function __construct( $_genre ) {
    $this->genre = $_genre;
}

// METODO
public function setType ( $length ) {
    if ( $length < 60 ) {
        $this->type = "Cortometraggio";
    } else {
        $this->type = "Cinema Movie";
    }
}

public function getType() {
    return $this->type;
}


}


?>