<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../app/views/template/partials/_heads.php'; ?>
</head>

<body>
    <?php include '../app/views/template/partials/_nav.php'; ?>
    <?php include '../app/views/template/partials/_main.php'; ?>
    <?php include '../app/views/template/partials/_footer.php'; ?>
    <?php include '../app/views/template/partials/_loader.php'; ?>
    <?php include '../app/views/template/partials/_scripts.php'; ?>
</body>

</html>

<!-- READ IT -->
<!-- 1. Initialisation et clonage d'un nouveau dépôt github via GitKtraken -->
<!-- 2. Mise en place d'une structure MVC vierge avec une connexionà la DB -->
<!-- 3. Intégration du template à partir du template fourni -->
<!-- 4. Découpage du template en partials et intégration de la zone dynamique $content -->
<!-- 5. On crée la route par défaut: -->
<!--
    PATTERN :/
    CTRL:postsController
    ACTION : index
-->