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

$sala1 = new Movie("Avventura");
echo "<p>" . $sala1->genre . "</p>";

$sala1->setType(35);
$typeMovie_sala1 = $sala1->getType();
echo "<p>" . $typeMovie_sala1 . "</p>";






// class user {
//     public $nome;
//     public $eta;

//     function __construct($_eta) {
//         $this->eta = $_eta;
//     }


    // public $email;

    // public $sconto = 0;

    // public function setSconto($eta){
    //     if($eta>65) {
    //         $this->sconto = 40;
    //     }
    // }

    // public function getSconto() {
    //     return $this->sconto;
    // }

// }

// $pippo = new user();

// $pippo->setSconto(40);
// $sconto_pippo = $pippo->getSconto();

// $pippo->nome = "Pippo";
// $pippo->email = "pippo@email.it";


// $paperino = new user(50);
// echo $paperino->eta;

?>