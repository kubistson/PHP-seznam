<?php
        class seznam {
                /**
                    * Zde se zapisuj� jednotliv� �daje v seznamu.
                    * @var array 
                    */
        private $type;
                /**
                    * Konstruktor t��dy kter� ulo�� typ seznamu.
                    * @param string $type
                    */
        private $polozky = array();
                /**
                    * Zde se ulo�� typ zadan�ho seznamu
                    * @var string 
                    */
        function __construct($type) {
        $this->type = $type;
    }
                /**
                    * P�id� polo�ku do seznamu.
                    * @param string $text
                    */
        function pridat_polozku($text) {
        $this->polozky[] = $text;
    }
                /**
                    * Vygeneruje tabulku a vr�t� j�.
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
 * @author Dan Kubi�ta <kubistadan@gmail.com>
 * @package SI
 * @version 1.1
 */