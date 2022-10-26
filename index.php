<?php

// CLASSE
class Movie {

    // VARIABILI D'ISTANZA
    public $title;
    public $length;
    public $language;
    public $genre;
    public $type;

    // COSTRUTTORE
    function __construct( $_genre , $_language = "" ) {
        $this->genre = $_genre;
        $this->language = $_language;
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

$sala1 = new Movie("Avventura");
echo "<p>" . $sala1->genre . "</p>";

$sala1->setType(35);
$typeMovie_sala1 = $sala1->getType();
echo "<p>" . $typeMovie_sala1 . "</p>";

?>