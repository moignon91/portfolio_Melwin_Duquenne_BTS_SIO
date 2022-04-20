<?php 

 include ("top.php");
?>
<div class="sun"></div>
    <img src="../image/plan.png" class="plan">
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('midi')
    </script>
<div class="carré_index">

    <div class="bulle_1">
        <div class="in_bulle_1">

            <h3 style="text-align: center;">Portefeuille de Compétences</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/competence/feuille_compétence.pdf" width="90%" height="90%"></iframe>
            </div>
            <div style="text-align: center;">
            Télécharger le pdf <a href="../pdf/competence/feuille_compétence.pdf">ici</a>
            </div>
        </div> 
    </div>
    
    <div class="bulle_2">
        <div class="in_bulle_1">
            <h3 style="text-align: center;">CV</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/competence/CV melwin duquenne.pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/competence/CV melwin duquenne.pdf">ici</a>
            </div>
        </div>
    </div>

</div>

<?php 

include ("bot.php");
?>