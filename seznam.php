<?php
        class seznam {
                /**
                    * Zde se zapisují jednotlivé údaje v seznamu.
                    * @var array 
                    */
        private $type;
                /**
                    * Konstruktor tøídy která uloží typ seznamu.
                    * @param string $type
                    */
        private $polozky = array();
                /**
                    * Zde se uloží typ zadaného seznamu
                    * @var string 
                    */
        function __construct($type) {
        $this->type = $type;
    }
                /**
                    * Pøidá položku do seznamu.
                    * @param string $text
                    */
        function pridat_polozku($text) {
        $this->polozky[] = $text;
    }
                /**
                    * Vygeneruje tabulku a vrátí jí.
                    * @return string
                    */
        function __toString() {
        $zpet = "";
        $zpet .= "<" . $this->type . ">";
            for ($i = 0; $i < count($this->polozky); $i++) {
                $zpet .= "<li>";
                $zpet .= $this->polozky[$i];
                $zpet .= "</li>";
        }
        $zpet .= "</" . $this->type . ">";
        return $zpet;
    }
}
/**
 * Description of seznam
 *
 * @author Dan Kubišta <kubistadan@gmail.com>
 * @package SI
 * @version 1.1
 */