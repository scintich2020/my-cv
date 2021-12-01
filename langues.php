<?php
     $langue1 = "Français";
     $langue2 = "Anglais";
     $check = "img/check.PNG";
     $langues = "Langues";

    echo 
        '
            <div class="card3">
                <div>
                    <h2>'.$langues.'</h2>
                    <p class="simple">'.$langue.'</p>
                </div>
                <div class="langages">
                    <div class="langues">
                        <img src='.$check.' style="width: 30px; height: 30px;"><label for="" id="french"
                            class="box">'.$langue1.'</label>
                    </div>
                    <div class="langues">
                        <img src='.$check.' style="width: 30px; height: 30px;"><label for="" id="english"
                            class="box">'.$langue2.'</label>
                    </div>
                </div>
            </div>';
?>