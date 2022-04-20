<?php 

 include ("top.php");
?>
<div class="sun"></div>
    <img src="../image/plan.png" class="plan">
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('midiap')
    </script>
<div class="carré_index">
    <div class="bulle_1">
        <div class="in_bulle_1">
        <h3 style="text-align: center;">Rapport</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/PPE3/Copie de Rapport-Technique PPE 3 Ecole de Musique FaSiLa .pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/../pdf/PPE3/Copie de Rapport-Technique PPE 3 Ecole de Musique FaSiLa .pdf">ici</a>
            </div>
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_1">
            <h3 style="text-align: center;">Annexe 1</h3>
            <div class="pdfcar">
                    <iframe class="pdfcomp" src="../pdf/PPE3/Copie de Annexe 1 - Cahier des charges.pdf" width="90%" height="100%"></iframe>
                </div>
                <div style="text-align: center;">
                    Télécharger le pdf <a href="../pdf/../pdf/PPE3/Copie de Annexe 1 - Cahier des charges.pdf">ici</a>
                </div>
            </div>
    </div>

    <div class="bulle_2" style="margin-top: 150px;">
        <div class="in_bulle_1">
            <h3 style="text-align: center;">Annexe 1</h3>
            <div class="pdfcar">
                    <iframe class="pdfcomp" src="../pdf/PPE3/Copie de Annexe 2 - Guide pratique d_utilisation de l_administration.pdf" width="90%" height="100%"></iframe>
                </div>
                <div style="text-align: center;">
                    Télécharger le pdf <a href="../pdf/../pdf/PPE3/Copie de Annexe 2 - Guide pratique d_utilisation de l_administration.pdf">ici</a>
                </div>
            </div>
    </div>
</div>

<?php 

include ("bot.php");
?>