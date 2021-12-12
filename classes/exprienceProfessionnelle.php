<?php
    class ExperienceProfessionnelle{

        public function __construct(public $poste, public $entreprise, public $dateDebut, public $dateFin, public $lien, public $activite){

        }

        public function get_experienceProfessionnelle(){
            echo
                ' <div class="partie1">
                    <p style="font-size: 20px;" class="experience_title">'.$this->poste.'<b>'.$this->entreprise.'</b>
                    </p>

                    <p class="partie1-1"> De '.$this->dateDebut.' à '.$this->dateFin.'<span>'.$this->lien.'</span></p>

                    <p class="chefProjet">'.$this->activite.'</p>
                    <hr>
                </div>';
        }


        public static function get_composant_experience_professionnelle($competences, $date){
            
            echo '
                <div class="contain">
                    <div class="card1">
                        <div class="right">
                            <div class="header_info">
                                <img src="img/batiment.png" alt="" class="imageBatiment" />
                                <div class="titre">
                                    <label class="experience" for="">Expérience Professionnelle ('.$date."ans".')</label><br />
                                    <label class="expertise" for="">Expertise en entreprise</label>

                                    <div class = "btn_edit_group">
                                        <button class ="btn_edit" id="edit1" style = "margin-right: 150px; width: 50px; height: 50px; margin-top:12px;">
                                            <i class="fa fa-pencil fa-1.5x" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <i class="fas fa-ellipsis-v fa-1x" style="color: white;"></i>
                        </div>
                        <div class="bottom1 scroll_bar">';
                        
                        foreach($competences as $c){
                            $c->get_experienceProfessionnelle();
                        }
                    echo ' </div>
                    </div>
                </div>';
        }
    }
?>