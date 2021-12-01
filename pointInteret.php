<?php
    $pointInteret = "Point d'intérêts";
    $passeTemps = "Simple passe temps pour se distraire:";
    $football = "img/football.jpg";
    $stackoverflow = "img/stack.jpg";
    $grafik = "img/grafik.jpg";
    $minds = "img/minds.jpg";
    $barclays = "img/barclays.jpg";
    $danse = "img/danse.jpg";
    $guinness = "img/guinness.jpg";
    $langue = "Pratiquées en entreprise";
    $check = "img/check.PNG";


   echo '
            <div class="card2 ">
                <h2>'.$pointInteret.'</h2>
                <p class="simple">'.$passeTemps.'</p>

                <div class="divertissement">
                    <img src='.$football.' alt="" />
                    <img src='.$stackoverflow.' alt="" />
                    <img src='.$grafik.' alt="" />
                </div>
                <div class="divertissement">
                    <img src='.$minds.' alt="" />
                    <img src='.$barclays.' alt="" />
                    <img src='.$danse.' alt="" />
                    <img src='.$guinness.' alt=""/>
                </div>
            </div>';
?>