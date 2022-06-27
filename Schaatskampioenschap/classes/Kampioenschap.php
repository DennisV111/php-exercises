<?php

class Kampioenschap {

    public $schaatsers = [];

    public function addSchaatser( $schaatser) {
        array_push($this->schaatsers, $schaatser); 
    }
    
    public function calcUitslag() {
        $uitslag = [];
        foreach ( $this->schaatsers as $naam=>$schaatser ) {
            $uitslag[$schaatser->naam] = $schaatser->calcSchaatserPunten();
            asort($uitslag);
            }
        return $uitslag;
    }

}

?>