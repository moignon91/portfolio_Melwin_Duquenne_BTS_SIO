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
                <iframe class="pdfcomp" src="#" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="#">ici</a>
            </div>
        </div> 
    </div>
    
</div>

<?php 

include ("bot.php");
?>