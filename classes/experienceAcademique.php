<?php
     class ExperienceAcademique{

        public function __construct(public $certification, public $ecole, public $date, public $detail){

        }


        public function get_experienceAcademique(){
            echo'
                <div class="partie1">
                    <p style="font-size: 20px;">'.$this->certification.'<b>'.$this->ecole.'</b></p>

                    <p class="partie1-1" style="color: black;"><span class="partie1-1">'.$this->date.'</span> <em>'.$this->detail.'</em></p>
                    <hr>
                </div>';
        }
        
        public static function get_composant_experience_academique($cursus){
            echo
                ' <div class="contain">
                    <div class="card1">
                        <div class="right">
                            <div class="header_info">
                                <i class="fas fa-graduation-cap fa-2x" style="color: white;"></i>

                                <div class="titre">
                                    <label class="experience" for="">Cursus académique</label><br/>
                                    <label class="expertise" for="">Diplômes et formations certifiantes</label>
                                </div>
                            </div>
                            <i class="fas fa-ellipsis-v fa-1x" style="color: white;"></i>

                        </div>
                        <div class="bottom1 scroll_bar">';
                            foreach($cursus as $cur){
                                $cur->get_experienceAcademique();
                            }
                echo ' </div>
                </div>
            </div>';
        }
        
    }
?>