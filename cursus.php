<?php
    $cursus = "Cursus académique";
    $diplome = "Diplômes et formations certifiantes";
    $dipet ="DIPET 2 Electrotechnique - ";
    $enset = " @ENSET DE DOUALA";
    $annee1 = "Aout 2016 -";
    $gestion = "Gestion d'éclairage d'une maison(Android + Arduino)";
    $oracleCertified = "Oracle Certified Assiciate - ";
    $entreprise1 = " @Kentnix Sarl";
    $annee2 = " Mars 2009 -";
    $oracleDatabase = "Oracle Database 11g Administration";
    $oracleSql ="Oracle SQL Certified - ";
    $entreprise2 = " @Kentnix Sarl";
    $annee3 = " Decembre 2008 -";
    $sqlType = "SQL2, SQL3, XML";
    $licence = "Licence professionnelle - ";
    $doualaInstitute = " @Douala Institute of Tech.";
    $annee4 = " Octobre 2008 -";
    $telecommunication = "Télécommunication & Réseaux";
    $dec = "DEC / BTS - ";
    $ccnb = " @CCNB Dieppe - Canada";
    $annee5 = " Septembre 2007 -";
    $programmation = " Programmation Appliquée Pour Internet";
    $baccalaureat = "Baccalauréat - ";
    $lycee = " @Lycée Technique de Douala Bassa";
    $annee6 = " Juin 2005 -";
    $specialite = "Electrotechnique, mention BIEN (major de centre)";


    echo    '<div class="card1">
                <div class="right">
                    <div class="header_info">
                        <i class="fas fa-graduation-cap fa-2x" style="color: white;"></i>

                        <div class="titre">
                            <label class="experience" for="">'.$cursus.'</label><br/>
                            <label class="expertise" for="">'.$diplome.'</label>
                        </div>
                    </div>
                    <i class="fas fa-ellipsis-v fa-1x" style="color: white;"></i>

                </div>
                <div class="bottom1 scroll_bar">
                    <div class="partie1">
                        <p style="font-size: 20px;">'.$dipet.'<b>'.$enset.'</b></p>

                        <p class="partie1-1" style="color: black;"><span class="partie1-1">'.$annee1.'</span> <em>'.$gestion.'</em></p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$oracleCertified.'<b>'.$entreprise1.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee2.'</span>
                            <em>'.$oracleDatabase.'</em> </p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$oracleSql.'<b>'.$entreprise2.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee3.'</span>
                            <em>'.$sqlType.'</em></p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$licence.'<b>'.$doualaInstitute.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee4.'</span>
                            <em>'.$telecommunication.'</em>
                        </p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$dec.'<b>'.$ccnb.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee5.'</span>
                            <em>'.$programmation.'</em> </p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$baccalaureat.'<b>'.$lycee.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee6.'</span>
                            <em>'.$specialite.'</em> </p>
                        <hr>
                    </div>

                    <div class="partie1">
                        <p style="font-size: 20px;">'.$baccalaureat.'<b>'.$lycee.'</b></p>

                        <p class="partie1-1" style="color: black;"> <span class="partie1-1">'.$annee6.'</span>
                            <em>'.$specialite.'</em> </p>
                    </div>

                </div>
            </div>';
?>