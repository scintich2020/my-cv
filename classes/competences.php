<?php
    class Competences{

        public function __construct(public $domaine, public $sousDomaine){

        }

        public function get_competences(){
                echo
                    ' <div class="skill">
                    <img src="img/check.PNG" style="width: 30px; height: 30px;">
                    <div class="domaine" style=" margin-left: 20px; flex: 1;">
                        <div class="skill_dev">
                            <h3>'.$this->domaine.'</h3>
                            <i class="fas fa-star" style="color: #DA394B;"></i>
                        </div>
                        <p style="font-size: 19px;">'.$this->sousDomaine.'</p>
                        <div class="switcher">
                            <span class="switcher_bar" style="width: 90%;"></span>
                            <span class="switcher_rounder" style="right:10% ;"></span>
                        </div>
                    </div>
                </div>';
            
        }

        public static function get_composant_competences($competence){
            foreach($competence as $compt){
                $compt->get_competences();
            }
        }
    }
?>