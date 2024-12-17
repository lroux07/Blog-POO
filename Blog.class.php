<?php
    class Blog {
        private $titre;
        private $commentaire;
        private $photo;
        private $url;
        private $date;

        public function __construct($titre, $commentaire, $photo, $url, $date) {
            $this->titre = $titre;
            $this->commentaire = $commentaire;
            $this->photo = $photo;
            $this->url = $url;
            $this->date = $date;
        }


        public function setTitre($titre) {
            $this->titre = $titre;
        }
        public function getTitre() {
            return $this->titre;
        }
    

        public function setCommentaire($commentaire) {
            $this->commentaire = $commentaire;
        }
        public function getCommentaire() {
            return $this->commentaire;
        }
    

        public function setPhoto($photo) {
            $this->photo = $photo['name'];
        }
        public function getPhoto() {
            return $this->photo;
        }


        public function setUrl($url) {
            $this->url = $url;
        }
        public function getUrl() {
            return $this->url;
        }


        public function setDate($date) {
            $this->date = $date;
        }
        public function getDate() {
            return $this->date;
        }
    }
?>