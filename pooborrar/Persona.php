<?php
    class Persona {
        private string $nombre;
        public function setNombre(string $nom) {
            $this->nombre=$nom;
        }
        public function imprimir(){
            echo $this->nombre;
            echo PHP_EOL;
        }

        /**
         * Get the value of nombre
         *
         * @return string
         */
        public function getNombre(): string {
                return $this->nombre;
        }
    }

$bruno = new Persona();
$bruno->setNombre("Bruno Díaz");
$bruno->imprimir();

 echo "<br>";
 echo " Today is " . date("l") . ". ";
?>