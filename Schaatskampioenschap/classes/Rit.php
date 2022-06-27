<?php

class Rit {

    public $afstand; //xxxx m
    public $tijd; //mmsshh

    public function __construct($afstand, $tijd) {
        $this->afstand = $afstand;
        $this->tijd = $tijd;
    }

    public function calcRitPunten() {
        return ( 500 / $this->afstand ) * ( substr($this->tijd,4,2) + 100 * substr($this->tijd,2,2) + 60 * 100 * substr($this->tijd,0,2) );
    }

}

?>