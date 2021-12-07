  <?php
    $frontEnd = "Développement front-end";
    $langageFront = "HTML5, SASS, VueJS?, Angular, JavaFX, ...";
    $backEnd = "Développement back-end";
    $langageBack = "NodeJS? Drupal 8, Larael, Kotlin, Java EE7";
    $mobile = "Développaement mobile";
    $langageMobile = "Android Kotlin, IOS Swift, Cordova, Flutter";
    $design = "UI / UX Design";
    $ideDesign = "Photoshop CC, Adobe XD, Material Design";
    $baseDonnees = "Base de données & Bid Data" ;
    $ideBaseDonnees = "Oracle 11g, PostgresSQL, Hadoop, Talend DI";
    $Outils = "Outils / Environnement ";
    $ideOutils = "Visual Paradign, Git, Docker, K8s, Linux";
    $checkbox = "img/check.PNG";


    echo '
            <div class="skill">
                <img src="img/check.PNG" style="width: 30px; height: 30px;">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$frontEnd.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$langageFront.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 90%;"></span>
                        <span class="switcher_rounder" style="right:10% ;"></span>
                    </div>
                </div>
            </div>

            <div class="skill">
                <img src="img/check.PNG" style="width: 30px; height: 30px;">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$backEnd.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$langageBack.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 70%;"></span>
                        <span class="switcher_rounder" style="right:30% ;"></span>
                    </div>
                </div>
            </div>

            <div class="skill">
                <img src="img/check.PNG" style="width: 30px; height: 30px;">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$mobile.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$langageMobile.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 87%;"></span>
                        <span class="switcher_rounder" style="right:13% ;"></span>
                    </div>
                </div>
            </div>
            <div class="skill">
                <img src="img/check.PNG" style="width: 30px; height: 30px;">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$design.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$ideDesign.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 60%;"></span>
                        <span class="switcher_rounder" style="right:40% ;"></span>
                    </div>
                </div>
            </div>
            <div class="skill">
                <img src="img/check.PNG" style="width: 30px; height: 30px;">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$baseDonnees.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$ideBaseDonnees.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 95%;"></span>
                        <span class="switcher_rounder" style="right:5% ;"></span>
                    </div>
                </div>
            </div>


            <div class="skill">
                <img src="img/check.PNG" height="30" width="30">
                <div class="domaine" style=" margin-left: 20px; flex: 1;">
                    <div class="skill_dev">
                        <h3>'.$Outils.'</h3>
                        <i class="fas fa-star" style="color: #DA394B;"></i>
                    </div>
                    <p style="font-size: 19px;">'.$ideOutils.'</p>
                    <div class="switcher">
                        <span class="switcher_bar" style="width: 90%;"></span>
                        <span class="switcher_rounder" style="right:10% ;"></span>
                    </div>
                </div>
            </div>';
?>