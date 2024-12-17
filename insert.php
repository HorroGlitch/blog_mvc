<?php
include('Manager.php');
include('Blog.php');

    $connexion = new PDO('mysql:host=127.0.0.1;dbname=poo', 'root');
    $manage = new Manager();
    $manage->setBase($connexion);
    $blog->setBase($connexion);
    // $manage->setTitre($titre);
    // $manage->setComm($comm);
    // $manage->setImage($image);


    //Récupération du titre, du commentaire, et de l'image depuis le formulaire
    $titre = $_POST['titre'];
    $comm = $_POST['commentary'];
    $image = $_POST['image'];

    $blog = new Blog();

    $blog->setTitre($titre);
    $blog->setComm($comm);
    $blog->setImage($image);

    $manage->insert($blog);
    $manage->show($blog);

?>

