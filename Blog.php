<?php
    class Blog{
        private $titre;
        private $comm;
        private $image;
        

        function getTitre(){
            return $this->titre;
        }

        function setTitre($titre){
            $this->titre = $titre;
            echo $titre;
        }
    }
?>