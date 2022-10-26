<?php

class user {
    public $nome;
    public $email;

    public $sconto = 0;

    public function setSconto($eta){
        if($eta>65) {
            $this->sconto = 40;
        }
    }

    public function getSconto() {
        return $this->sconto;
    }

}

$pippo = new user();

$pippo->setSconto(40);
$sconto_pippo = $pippo->getSconto();

// $pippo->nome = "Pippo";
// $pippo->email = "pippo@email.it";


// $paperino = new user();


?>