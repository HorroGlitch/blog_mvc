<?php
    class Blog{
        private $titre;
        private $comm;
        private $image;
        private $base;

        public function setBase($base){
            $this->base = $base;
        }

        public function show($blog){
            $sql = "SELECT * FROM blog";

            $resultat = $base->prepare($sql);
            $resultat->execute(array());
            while ($ligne = $resultat->fetch())
            {
                function getTitre(){
                    return $this->titre;
                }
        
                function setTitre($titre){
                    $this->titre = $titre;
                    echo '<h1>'. $ligne['titre'] .'</h1>';
                }
        
        
                function getComm(){
                    return $this->comm;
                }
        
                function setComm($comm){
                    $this->comm = $comm;
                    echo '<p>'. $ligne['commentaire'] .'</p>';
                }
        
        
                function getImage(){
                    return $this->image;
                }
        
                function setImage($image){
                    $this->image = $image;
                    echo '<img src="'.$ligne['image'].'">';
                }
            }
        }
        

        
        
    }
?>