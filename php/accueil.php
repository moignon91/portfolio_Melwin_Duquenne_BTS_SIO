<?php 

 include ("top.php");
?>
<div class="sun"></div>
    <img src="../image/plan.png" class="plan">
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('debut')
    </script>
<div class="carré_index">
    
    <div class="bulle_1">
        <div class="in_bulle_1">
              <h2 style="text-align: center;">  Qui suis-je </h2>
              <br>
              Je m'appelle Melwin Duquenne j'ai 22 ans, je suis actuellement en BTS SIO SLAM en deuxième année. 
              <br><br>
              Ce portfolio a été créer pendant ma deuxième années pour le passage a l'oral du BTS SIO SLAM.
              <br><br>
              Ce que je voudrais faire plus tard est de travailler dans les applications mobile/web ou dans le développement <br> web, 
              pour réaliser cela je vais continuer en licence pro puis possiblement en master.
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_2">
            <h2 style="text-align: center;"> Qualités</h2>
            <br>
            <br>
            <ul style="margin-left:30px;">
                <li>
                    <h5>
                    Persévérant
                    </h5>
                </li>
                <br>
                <li>
                    <h5>
                    autodidacte
                    </h5>
                </li>
                <br>
                <li>
                    <h5>
                    patient
                    </h5>
                </li>
            </ul>
            <h2 style="text-align: center;"> Langage utilisé</h2>
            <ul style="margin-left:30px;">
                <li>
                    <h5>
                    HTML
                    </h5>
                </li>
                <br>
                <li>
                    <h5>
                    CSS/SCSS
                    </h5>
                </li>
                <br>
                <li>
                    <h5>
                    java/javascript
                    </h5>
                </li>
            </ul>
            <ul style="margin-left:300px; margin-top:-150px; ">
                <li>
                    <h5>
                    XML
                    </h5>
                </li>
                <br>
                <li>
                    <h5>
                    Kotlin
                    </h5>
                </li>
                <br>
            </ul>
        </div>
    </div>
</div>

<?php 

include ("bot.php");
?>