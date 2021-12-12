<?php

     $langue1 = "Français";
     $langue2 = "Anglais";

    echo 
        '
            <div class="card3">
                <div>
                    <h2>Langues</h2>
                    <p class="simple">Pratiquées en entreprise</p>
                </div>
                <div class="langages">
                    <div class="langues">
                        <img src="img/check.PNG" style="width: 30px; height: 30px;"><label for="" id="french"
                            class="box">'.$langue1.'</label>
                    </div>
                    <div class="langues">
                        <img src="img/check.PNG" style="width: 30px; height: 30px;"><label for="" id="english"
                            class="box">'.$langue2.'</label>
                    </div>
                </div>
            </div>';
?>