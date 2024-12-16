<?php
    class Manager{
        private $base;


        public function setBase($base){
            $this->base = $base;
        }


        public function insert($blog){
            $sql = "INSERT INTO blog (
            titre,
            commentary,
            image,
            now()) VALUES (

            $blog->getTitre(),
            $blog->getComm(),
            $blog->getImage(),
            :now())";

            $this->poo->query($sql);
        }
    }
?>