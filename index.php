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
    <title>CV</title>
</head>
<body>
    <div class="parent">
        <div class="left">
            <?php
                include("profile.php");
            ?>
        </div>
        <div class="leftbottom">
            <?php
                include("domaine.php");
            ?>
        </div>
        <div class="contain">
            
            <?php
                include("experience.php");
            ?>
            <div class="middle">
                <?php
                    include("pointInteret.php");
                ?>
                <?php
                    include("langues.php");
                ?>
            </div>
                <?php
                    include("cursus.php");
                ?>
        </div>
        
    </div>
</body>
</html>