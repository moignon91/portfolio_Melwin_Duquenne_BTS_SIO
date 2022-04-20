<?php 

 include ("top.php");
?>
<div class="sun"></div>
    <img src="../image/plan.png" class="plan">
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('apresmid')
    </script>
<div class="carré_index">

    <div class="bulle_1">
        <div class="in_bulle_1">
            <h3 style="text-align: center;">Certification RGPD</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/rgpd.pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/rgpd.pdf">ici</a>
            </div>
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_1">
            <h3 style="text-align: center;">Certification ANSSI</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/sec.pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/sec.pdf">ici</a>
            </div>
        </div>
    </div>

</div>

<?php 

include ("bot.php");
?>