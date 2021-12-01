<?php
    $nom = "Scintich Ndanga";
    $metier = "Architecte logiciel / DevOps";
    $dateNaissance = "Née le 11 Octobre 2002";
    $origine = "Originaire de l'Ouest Cameroun";
    $celibataire = "Célibataire - Santé : RAS";
    $quartier = "Résident a Logbessou";
    $ville = "Douala-Cameroun";
    $map = "Map: 4.053276, 9.765047";
    $telephone = "(237) 658 430 215";
    $mobile = "Mobile, Telegram, Whatsapp";
    $mail = "eunicescintich@gmail.com";
    $disponibilité = "Google, Twiiter, LInkedin, Github";
    $projet = "+45 PROJETS";
    $contrat = "+31 CONTRATS";
    $expérience = "12 ANS D'EXP";
    $paype = "img/paype.PNG";
    $imageProfil = "img/image1.jpg";
    $imagePlus = "img/plus.png";


echo '
    <div class="div1">
        <div class="cover"></div>
        <div class="div2">

            <i class="fa fa-bars fa-1x" aria-hidden="true"></i>

            <div>
                <input type="search" style="width: 200px;" name="" id="search"
                    placeholder= "Besoin un chef de projet?" />
            </div>
            <div style="display: flex;">
                <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                <img id="loupe" src='.$paype.' style=" height: 25px;" alt="" srcset="" />
                <i class="fa fa-times fa-1x" aria-hidden="true"></i>

            </div>
        </div>


        <div class="profil">
            <img src='.$imageProfil.' class="imageProfil">
            <div class="info">
                <h2 class="nom">'.$nom.'</h2>
                <p for="" class="metier">'.$metier.'</p>
            </div>
        </div>


    </div>

    <div class="information">

        <button class="btn_plus">
            <img src='.$imagePlus.' style="height: 25px; width: 25px; margin-top: 5px" alt="" srcset="" />
        </button>

        <div class="information_personnelle">
            <div class="div3">

                <i class="fas fa-birthday-cake fa-2x"></i>
                <div class="info_perso">
                    <p for="">'.$dateNaissance.'</p>
                    <p forlangue="">'.$origine.'</p>
                    <p for="">'.$celibataire.'</p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fas fa-map-marker-alt fa-2x"></i>

                <div class="info_perso">
                    <p for="">'.$quartier.'</p>
                    <p for="">'.$ville.'</p>
                    <p for="">'.$map.'</p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>

                <div class="info_perso ">
                    <p for="">'.$telephone.'</p>
                    <p for="">'.$mobile.'</p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fas fa-envelope fa-2x"></i>

                <div class="info_perso " style="margin-bottom: 40px;">
                    <p for="">'.$mail.'</p>
                    <p for="">'.$disponibilité.'</p>
                </div>
            </div>
        </div>

        <div class="div6" style="margin-left: 35px; padding-bottom: 20px;">
            <label for="" style="margin-left: 10px; font-weight: bold;">'.$projet.'</label>
            <label for="" style="margin-left: 15px">'.$contrat.'</label>
            <label for="" style="margin-left: 20px">'.$expérience.'</label>
        </div>



    </div>
    <div class="content_bar">
        <div style="background: red; width: 33%; height: 3px;"></div>
    </div>';
?>
