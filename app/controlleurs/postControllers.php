<?php
function indexAction(PDO $connexion)
{
    // Je demande les posts qu modèles et je les mets dans $posts 
    include_once '../app/models/postModels.php';
    $posts = findAll($connexion);

    // Je charge la vue index dans $content
    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id)
{
    // Je demande le post aux modèles et je le mets dans $post 
    include_once '../app/models/postModels.php';
    $post = findOneById($connexion, $id);

    // Je charge la vue show dans $content
    global $content;
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}