<?php

// CLASSE
class Movie {

    // VARIABILI D'ISTANZA
    public $title;
    public $length = "";
    public $language;
    public $genre;
    public $type;

    // COSTRUTTORE
    function __construct( $_genre , $_language = "" ) {
        $this->genre = $_genre;
        $this->language = $_language;
    }

    // METODO
    public function setTypeLength ( $length ) {
        if ( $length < 60 ) {
            $this->type = "Cortometraggio";
        } else {
            $this->type = "Cinema Movie";
        }
        $this->length = $length;
    }

    public function getType() {
        return $this->type;
    }

    public function getLength() {
        return $this->length;
    }


}

?>