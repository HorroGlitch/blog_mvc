<?php
    class Manager{
        private $base;


        public function setBase($base){
            $this->base = $base;
        }


        public function insert($blog){
            $sql = "INSERT INTO blog (
            titre,
            commentaire,
            image,
            date) VALUES (:titre, :commentaire, :image, NOW())";
            $result = $this->base->prepare($sql);
            $result->execute(['titre' => $blog->getTitre(), 'commentaire' => $blog->getComm(), 'image' => $blog->getImage()]);
        }


        public function show($blog){
            $sql = "SELECT * FROM blog";

            $resultat = $base->prepare($sql);
            $resultat->execute(array());
            while ($ligne = $resultat->fetch())
            {

            }
        }

        
    }
?>