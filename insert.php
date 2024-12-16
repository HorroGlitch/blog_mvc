<?php

    $connexion = new PDO();
    $manage = new Manager();
    $manage->setBase($connexion);

    $titre = $_POST['titre'];
    $comm = $_POST['commentary'];
    $image = $_POST['image'];

    $blog = new Blog();

    $blog->setTitre($titre);
    $blog->setComm($comm);
    $blog->setImage($image);

    $manage->insert($blog);
    

?>

