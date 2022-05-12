<?php
function indexAction(PDO $connexion){
  
    include_once "../app/models/postModels.php";
    $posts = findAll($connexion);
    global $content;
    ob_start();
    include "../app/views/posts/index.php";
    $content = ob_get_clean();
}

  
