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
            echo '<h1>'. $titre .'</h1>';
        }


        function getComm(){
            return $this->comm;
        }

        function setComm($comm){
            $this->comm = $comm;
            echo '<p>'. $comm .'</p>';
        }


        function getImage(){
            return $this->image;
        }

        function setImage($image){
            $this->image = $image;
            echo '<img src="'.$image.'">';
        }
        
    }
?>