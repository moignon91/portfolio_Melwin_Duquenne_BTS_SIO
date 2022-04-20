<?php 

 include ("top.php");
?>
<div class="sun"></div>

    <img src="../image/plan.png" class="plan"> 
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('dark')
    </script>
<div class="carré_index">
    <div class="bulle_1">
        <div class="in_bulle_1">
            <h1 style="text-align: center;">Once Upon a time</h1>
            <br><br>
            <h5>
                <u>Once Upon a time</u> est entreprise qui propose des escape game pour divertir la clientéle, vous pouvez allez voir sur le site <a href="https://www.escapegameauch.fr/">ici</a>.
                <br><br>
                Le but de mon stage était de créer une application mobile.<br><br>

                L'objectif est de créer un jeu qui sera présenté via une carte de Maps dont il y aura des
                points dessus où les joueurs devront se rendre afin de résoudre des énigmes pour
                compléter le scénario.
                <br><br>
                L'application doit permettre à l'administrateur d'ajouter des points sur la carte, de les
                supprimer ou les modifier. Ce qui permet de faire des jeux dans plusieurs villes
                différentes.
            </h5>
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_2">
            <h3 style="text-align: center;">Rapport</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/stage/once super a time.pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/../pdf/stage/once super a time.pdf">ici</a>
            </div>
        </div>
    </div>
</div>

<?php 

include ("bot.php");
?>