<?php
    class Langues{
        public function __construct(public $langueAnglaise, public $langueFrançaise){

        }

        public function getComposant_langue($langue){
            echo '
            <div class="card3">
                <div>
                    <h2>Langues</h2>
                    <p class="simple">Pratiquées en entreprise</p>
                </div>
                <div class="langages">
                    <div class="langues">
                        <img src="img/check.PNG" style="width: 30px; height: 30px;"><label for="" id="french"
                            class="box">'.$this->langueFrançaise.'</label>
                    </div>
                    <div class="langues">
                        <img src="img/check.PNG" style="width: 30px; height: 30px;"><label for="" id="english"
                            class="box">'.$this->langueAnglaise.'</label>
                    </div>
                </div>
            </div>';
        }
    }
?>