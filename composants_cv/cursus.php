<?php

    $cursus = array(
        new ExperienceAcademique( "DIPET 2 Electrotechnique - ", " @ENSET DE DOUALA", "Aout 2016 -", 
        "Gestion d'éclairage d'une maison(Android + Arduino)" ),

        new ExperienceAcademique( "Oracle Certified Assiciate - ", " @Kentnix Sarl", " Mars 2009 -", 
        "Oracle Database 11g Administration" ),

        new ExperienceAcademique( "Oracle SQL Certified - ", " @Kentnix Sarl", " Decembre 2008 -", 
        "SQL2, SQL3, XML" ),

        new ExperienceAcademique( "Licence professionnelle - ", " @Douala Institute of Tech.", " Octobre 2008 -", 
        "Télécommunication & Réseaux" ),

        new ExperienceAcademique( "DEC / BTS - ", " @CCNB Dieppe - Canada", " Septembre 2007 -", 
        " Programmation Appliquée Pour Internet" ),

        new ExperienceAcademique( "Baccalauréat - ", " @Lycée Technique de Douala Bassa", " Juin 2005 -", 
        "Electrotechnique, mention BIEN (major de centre)" ),

        new ExperienceAcademique( "Oracle SQL Certified - ", " @Kentnix Sarl", " Decembre 2008 -", 
        "SQL2, SQL3, XML" ),
    );
    
    ExperienceAcademique::get_composant_experience_academique($cursus);
?>