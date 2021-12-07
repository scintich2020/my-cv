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
    $email = "eunicescintich@gmail.com";
    $disponibilité = "Google, Twiiter, LInkedin, Github";
    $projet = "+45 PROJETS";
    $contrat = "+31 CONTRATS";
    $expérience = "12 ANS D'EXP";
    $paype = "img/paype.PNG";
    $imageProfil = "img/image1.jpg";
    $imagePlus = "img/plus.png";   
?>

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
                <img id="loupe" src = <?php echo $paype ?> style=" height: 25px;" alt="" srcset="" />
                <i class="fa fa-times fa-1x" aria-hidden="true"></i>

            </div>
        </div>
        <div class="profil">
            <img src = <?php echo $imageProfil?> class="imageProfil">
            <div class="info">
                <h2 class="nom"><?php echo $nom ?></h2>
                <p for="" class="metier"><?php echo $metier ?></p>
            </div>
        </div>
    </div>

    <div class="information">
        <div class="btn_click_group" id = "btn-click-groups">
                <button class ="btn_sendMail " id="btn_sender" name = "action" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-envelope fa-2x" aria-hidden="true"></i>
                </button>
            <button class ="btn_share " id="btn-send">
                <i class="fa fa-share-square fa-2x" aria-hidden="true"></i>
            </button>
        </div>

        <button class="btn_plus"  id="btn-click">
            <img src=<?php echo $imagePlus ?> style="height: 25px; width: 25px; margin-top: 5px" alt="" srcset="" />
        </button>
        <div class="information_personnelle">
            <div class="div3">

                <i class="fas fa-birthday-cake fa-2x"></i>
                <div class="info_perso">
                    <p for=""><?php echo $dateNaissance ?></p>
                    <p forlangue=""><?php echo $origine ?></p>
                    <p for=""><?php echo $celibataire ?></p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fas fa-map-marker-alt fa-2x"></i>

                <div class="info_perso">
                    <p for=""><?php echo $quartier ?></p>
                    <p for=""><?php echo $ville ?></p>
                    <p for=""><?php echo $map ?></p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>

                <div class="info_perso ">
                    <p for=""><?php echo $telephone ?></p>
                    <p for=""><?php echo $mobile ?></p>
                    <hr>
                </div>
            </div>

            <div class="div3">

                <i class="fas fa-envelope fa-2x"></i>

                <div class="info_perso " style="margin-bottom: 40px;">
                    <p for=""><?php echo $email ?></p>
                    <p for=""><?php echo $disponibilité ?></p>
                </div>
            </div>
        </div>

        <div class="div6" style="margin-left: 35px; padding-bottom: 20px;">
            <label for="" style="margin-left: 10px; font-weight: bold;"><?php echo $projet ?></label>
            <label for="" style="margin-left: 15px"><?php echo $contrat ?></label>
            <label for="" style="margin-left: 20px"><?php echo $expérience ?></label>
        </div>
    </div>
    <div class="content_bar">
        <div style="background: red; width: 33%; height: 3px;"></div>
    </div>


<!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Envoyer par mail</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
            </div>
            <div class="modal-body">
            <form method = "post" action ="sendMail.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name = "email" style = "height: 50px;" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Envoyer</button>
                <button type ="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            </div>
        </div>
    </div>


<!-- <script>
    function message(){
        alert("bonjour");
    }
</script> -->

<!-- <script type="text/javascript">

    let btnClick = document.querySelector("#btn-click")

    btnClick.addEventListener("click" ,(e) => {

            // alert("bonjour");

            var maDiv = document.getElementById("btn-click-groups");

            maDiv.classList.toggle("active")
} )
</script> -->