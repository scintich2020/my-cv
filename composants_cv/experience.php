<?php

    $competences =  array(
        new ExperienceProfessionnelle( "Chef des projets technologiques -", " @Ets.M DE M", "Juillet 2019", "ce jour ", 
            "- http://mdem.cm", "Chef du projet annuaire-universel.cm de l'ART" ),

        new ExperienceProfessionnelle( "Fondateur & DT - ", " @Startup ChickDev", "Juin 2015", "ce jour ", 
        "- http://chickdev.cm", "Réalistion de plusieurs sites et applications web et mobiles" ),

        new ExperienceProfessionnelle( "Enseignent - ", " @Institut universitaire de la cote", "Octobre 2011", "ce jour ", 
        "- http://istdi.net", "Analyse. UML & MERISE. BD/SQL. ORACLE & MYSQL; Dv. iOS &Android;BI & Data Talend DI & Hadoop. 1ère, 2ème et 4ème annés" ),

        new ExperienceProfessionnelle( "Développeur en chef - ", "@Kayroul group", "Mai 2013", "ce jour ", 
        "- http://khayroual.com", "Realisation de multiples projets logiciels et web, Infographie, ..." ),

        new ExperienceProfessionnelle( "Responsable commercial - ",  "@Bao Sarl", "Decembre 2012", "ce jour ", 
        "- http://bao-sarl.com", "Définition des strategies commerciales, Controle de qualité, Suivi ..." ),
    );

    $date = date("Y")-2011;

    ExperienceProfessionnelle::get_composant_experience_professionnelle($competences, $date);
?>