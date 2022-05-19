<?php
// Route par défault
// PATTERN: ?postID=x
// CTRL: postController
// ACTION: index
if (isset($_GET['postID'])):
    include_once '../app/controlleurs/postcontrollers.php';
    showAction($connexion, $_GET['postID']);

else:
include_once '../app/controlleurs/postControllers.php';
indexAction($connexion);
endif;