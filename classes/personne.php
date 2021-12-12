<?php
     class Personne{
        

        public function __construct(public $nom, public $metier, public $dateNaissance,
            public $origine, public $statusMatrimonial,public $quartier, public $ville, public $localisation, public $telephone,
            public $reseauSocial,public $email,public $disponibilité,public $projet, public $contrat ,public $experience)
        {
        
        }


        public function get_information_profil(){
            echo'
            <div class="div1">
                <div class="cover"></div>
                <div class="div2">
                    <i class="fa fa-bars fa-1x" aria-hidden="true"></i>
                    <div>
                        <input type="search" style="width: 150px;" name="" id="search"
                            placeholder= "Besoin un chef de projet?" />
                    </div>
                    <div style="display: flex;">
                        <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                        <img id="loupe" src = "img/paype.PNG" style=" height: 25px;" alt="" srcset="" />
                        <i class="fa fa-times fa-1x" aria-hidden="true"></i>
        
                    </div>
                </div>
                <div class="profil">
                    <img src = "img/image1.jpg" class="imageProfil">
                    <div class="info">
                        <h2 class="nom">'.$this->nom.'</h2>
                        <p for="" class="metier">'.$this->metier.'</p>
                    </div>
                </div>
            </div>
            <div class="information">
            <div class="btn_click_group" id = "btn-click-groups">
                    <button class ="btn_sendMail " id="btn_sender" name = "action" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-envelope fa-2x" aria-hidden="true"></i>
                    </button>
                    <button class ="btn_share " id="btn-send">
                        <i class="fa fa-download fa-2x" aria-hidden="true"></i>
                    </button>
                    <button class ="btn_edit " id="edit">
                        <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                    </button>
            </div>
    
            <button class="btn_plus"  id="btn-click">
                <img src="img/plus.png" style="height: 25px; width: 25px; margin-top: 5px" alt="" srcset="" />
            </button>
            <div class="information_personnelle">
                <div class="div3">
    
                    <i class="fas fa-birthday-cake fa-2x"></i>
                    <div class="info_perso">
                        <p for="">'.$this->dateNaissance.'</p>
                        <p forlangue="">'.$this->origine.'</p>
                        <p for="">'.$this->statusMatrimonial.'</p>
                        <hr>
                    </div>
                </div>
    
                <div class="div3">
    
                    <i class="fas fa-map-marker-alt fa-2x"></i>
    
                    <div class="info_perso">
                        <p for="">'.$this->quartier.'</p>
                        <p for="">'.$this->ville.'</p>
                        <p for="">'.$this->localisation.'</p>
                        <hr>
                    </div>
                </div>
    
                <div class="div3">
    
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
    
                    <div class="info_perso ">
                        <p for="">'.$this->telephone.'</p>
                        <p for="">'.$this->reseauSocial.'</p>
                        <hr>
                    </div>
                </div>
    
                <div class="div3">
    
                    <i class="fas fa-envelope fa-2x"></i>
    
                    <div class="info_perso " style="margin-bottom: 40px;">
                        <p for="">'.$this->email.'</p>
                        <p for="">'.$this->disponibilité.'</p>
                    </div>
                </div>
            </div>
    
            <div class="div6" style="margin-left: 35px; padding-bottom: 20px;">
                <label for="" style="margin-left: 10px; font-weight: bold;">'.$this->projet.'</label>
                <label for="" style="margin-left: 15px">'.$this->contrat.'</label>
                <label for="" style="margin-left: 20px">'.$this->experience.'</label>
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
                    <h2 class="modal-title">Envoyer par mail</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body">
                <form method = "post" action ="sendMail.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name = "email" style = "height: 50px;" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                </div>
                <div class="modal-footer" style = "justify-content: space-between;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type ="submit"  class="btn btn-primary" id = "send">Envoyer</button>
                </div>
                </form>
                    <div class = "spinner_none" id = "loader">
                        <div class="spinner-border text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        }
    }
?>