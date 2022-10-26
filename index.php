<?php

class Movie {
    public $title;
    public $length;
    public $language;
    public $genre;

    function __construct($_genre) {
        $this->genre = $_genre;
    }


}

$sala1 = new Movie("Avventura");
echo $sala1->genre;






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