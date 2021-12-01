<?php
    $imageBatiment = "img/batiment.png";
    $experience = "Expérience Professionnelle";
    $expertise = "Expertise en entreprise";
    $experienceTitle = "Chef des projets technologiques -";
    $ets = " @Ets.M DE M";
    $annee1 = "De Juillet 2019 à ce jour ";
    $lien1 = "- http://mdem.cm";
    $chefProjet = "Chef du projet annuaire-universel.cm de l'ART";
    $fondateur = "Fondateur & DT - ";
    $startup = " @Startup ChickDev";
    $annee2 = "De Juin 2015 à ce jour ";
    $lien2 = "- http://chickdev.cm";
    $realisation = "Réalistion de plusieurs sites et applications web et mobiles";
    $enseignent = "Enseignent - ";
    $institut = " @Institut universitaire de la cote";
    $annee3 = "De Octobre 2011 à ce jour ";
    $lien3 = "- http://istdi.net";
    $matiere = "Analyse. UML & MERISE. BD/SQL. ORACLE & MYSQL; Dv. iOS &Android;BI & Data Talend DI & Hadoop. 1ère, 2ème et 4ème annés";
    $developpeur = "Développeur en chef - ";
    $entreprise1 = "@Kayroul group";
    $annee4 = "De Mai 2013 à Juin 2015 ";
    $lien4 = "- http://khayroual.com";
    $realisationMultiple = "Realisation de multiples projets logiciels et web, Infographie, ...";
    $responsableCommercial = "Responsable commercial - ";
    $entreprise2 = " @Bao Sarl";
    $annee5 = "De Decembre 2012 à Juin 2013 ";
    $lien5 = "- http://bao-sarl.com";
    $definitionStrategie = "Définition des strategies commerciales, Controle de qualité, Suivi ...";
    $date = 2021-2011;

echo '
<div class="contain">
    <div class="card1">
        <div class="right">
            <div class="header_info">
                <img src='.$imageBatiment.' alt="" class="imageBatiment" />
                <div class="titre">
                    <label class="experience" for="">'.$experience.'.'.$date.'</label><br />
                    <label class="expertise" for="">'.$expertise.'</label>
                </div>
            </div>

            <i class="fas fa-ellipsis-v fa-1x" style="color: white;"></i>
        </div>
        <div class="bottom1 scroll_bar">
            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$experienceTitle.'<b>'.$ets.'</b></p>

                <p class="partie1-1">'.$annee1.'<span>'.$lien1.'</span></p>

                <p class="chefProjet">'.$chefProjet.'</p>
                <hr>
            </div>

            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$fondateur.'<b>'.$startup.'</b>
                </p>

                <p class="partie1-1">'.$annee2.'<span>'.$lien2.'</span></p>

                <p class="chefProjet">'.$realisation.'</p>
                <hr>
            </div>

            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$enseignent.'<b>'.$institut.'</b></p>

                <p class="partie1-1">'.$annee3.'<span>'.$lien3.'</span></p>

                <p class="chefProjet">'.$matiere.'</p>
                <hr>
            </div>

            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$developpeur.'<b>'.$entreprise1.'</b></p>

                <p class="partie1-1">'.$annee4.'<span>'.$lien4.'</span></p>

                <p class="chefProjet">'.$realisationMultiple.'</p>
                <hr>
            </div>

            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$responsableCommercial.'<b>'.$entreprise2.'</b>
                </p>

                <p class="partie1-1">'.$annee5.'<span>'.$lien5.'</span></p>

                <p class="chefProjet">'.$definitionStrategie.'</p>
                <hr>
            </div>
            <div class="partie1">
                <p style="font-size: 20px;" class="experience_title">'.$experienceTitle.'<b>'.$ets.'</b></p>

                <p class="partie1-1">'.$annee1.'<span>'.$lien1.'</span></p>

                <p class="chefProjet">'.$chefProjet.'</p>
            </div>

        </div>
    </div>
</div>';
?>