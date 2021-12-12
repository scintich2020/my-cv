  <?php

    $competence = array(
    new Competences( "Développement front-end", "HTML5, SASS, VueJS, Angular, JavaFX, ..."),
    new Competences( "Développement back-end", "NodeJS, Drupal 8, Larael, Kotlin, Java EE7"),
    new Competences( "Développement mobile", "Android Kotlin, IOS Swift, Cordova, Flutter"),
    new Competences( "UI / UX Design", "Photoshop CC, Adobe XD, Material Design"),
    new Competences( "Base de données & Big Data", "Oracle 11g, PostgresSQL, Hadoop, Talend DI"),
    new Competences( "Outils / Environnement ", "Visual Paradign, Git, Docker, K8s, Linux"),);

    Competences::get_composant_competences($competence);

    
?>