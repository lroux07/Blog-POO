<?php
    class Manager {
        private $bdd;

        public function __construct($bdd) {
            $this->bdd = $bdd;
        }

        public function setBase($bdd) {
            $this->bdd = $bdd;
        }

        public function getBase() {
            return $this->bdd;
        }
    }
?>