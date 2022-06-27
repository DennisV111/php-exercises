<?php

class Schaatser {

    public $naam;
    public $ritten = [];

    public function __construct($naam) {
        $this->naam = $naam;
    }
    
    public function addRit($rit) {
            array_push($this->ritten, $rit); 
    }

    public function calcSchaatserPunten() {
        $puntenTotaal = 0;
        foreach ($this->ritten as $rit) {
            $puntenTotaal += $rit->calcRitPunten();
        }
        return (int)round($puntenTotaal);
    }

}

?>