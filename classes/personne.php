<?php
     class Personne{
    public $nom ; 
    public $metier;
    public $dateNaissance;
    public $origine ;
    public $statusMatrimonial;
    public $quartier ;
    public $ville ;
    public $localisation ;
    public $telephone ;
    public $reseauSocial ;
    public $email ;
    public $disponibilité ;
    public $projet ;
    public $contrat ;
    public $expérience; 
    public $paype ;
    public $imageProfil; 
    public $imagePlus; 
        

        public function __construct($nom, $metier, $dateNaissance,
        $origine, $statusMatrimonial,$quartier, $ville,$localisation,$telephone,$reseauSocial,$email,$disponibilité,$projet,$contrat,$expérience,
        $paype, $imageProfil, $imagePlus)
        {
            $this->nom = $nom;
            $this->metier=$metier;
            $this->dateNaissance=$dateNaissance;
            $this->origine=$origine;
            $this->statusMatrimonial  =  $statusMatrimonial;
            $this->quartier=$quartier;
            $this->ville=$ville;
            $this->localisation= $localisation;
            $this->telephone= $telephone;
            $this->reseauSocial = $reseauSocial;
            $this->email = $email;
            $this->disponibilité = $disponibilité;
            $this->projet = $projet;
            $this->contrat = $contrat;
            $this->expérience = $expérience;
            $this->paype = $paype;
            $this->imageProfil = $imageProfil;
            $this->imagePlus = $imagePlus;

        }

        public function profil(){
        echo
            '<div class="div1">
            <div class="cover"></div>
            <div class="div2">
                <i class="fa fa-bars fa-1x" aria-hidden="true"></i>
                <div>
                    <input type="search" style="width: 200px;" name="" id="search"
                        placeholder= "Besoin un chef de projet?" />
                </div>
                <div style="display: flex;">
                    <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                    <img id="loupe" src = '.$paype.' style=" height: 25px;" alt="" srcset="" />
                    <i class="fa fa-times fa-1x" aria-hidden="true"></i>
    
                </div>
            </div>
            <div class="profil">
                <img src ='.$imageProfil.'class="imageProfil">
                <div class="info">
                    <h2 class="nom">'.$nom.'</h2>
                    <p for="" class="metier">'.$metier.'</p>
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
                        <p for="">'.$mobile .'</p>
                        <hr>
                    </div>
                </div>
    
                <div class="div3">
    
                    <i class="fas fa-envelope fa-2x"></i>
    
                    <div class="info_perso " style="margin-bottom: 40px;">
                        <p for="">'.$email .'</p>
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
        </div>';
        }
}
?>