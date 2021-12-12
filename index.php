
<?php
    require "classes/exprienceProfessionnelle.php";
    require "classes/experienceAcademique.php";
    require "classes/personne.php";
    require "classes/competences.php";
    require "classes/langues.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="script/jquery-3.5.1.min.js" defer></script>
    <script src="script/script.js" defer></script>
    
    <title>CV</title>
</head>

<body>
    
    <div class="parent">
        <div class="left">
            <?php
                include("composants_cv/profile.php");
            ?>
        </div>
        <div class="leftbottom">
            <?php
                include("composants_cv/domaine.php");
            ?>
        </div>
        <div class="contain">
            
            <?php
                include("composants_cv/experience.php");
            ?>
            <div class="middle">
                <?php
                    include("composants_cv/pointInteret.php");
                ?>
                <?php
                    include("composants_cv/langue.php");
                ?>
            </div>
                <?php
                    include("composants_cv/cursus.php");
                ?>
        </div> 
    </div>
</body>
</html>