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
        <div class="in_bulle_1" >
                <h3>Escape game</h3>
                <br>
                <iframe class="pdfcomp" src="../pdf/stage/Rapport escape game.pdf" width="90%" height="100%"></iframe>
                <div style="text-align: center; margin-left: -30px;">
                    Télécharger le pdf <a href="../pdf/stage/Rapport escape game.pdf">ici</a>
                </div>
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_1" >
            <h3>One way</h3>
            <br>
            <iframe class="pdfcomp" src="../pdf/stage/Rapport one way.pdf" width="90%" height="100%"></iframe>
            <div style="text-align: center; margin-left: -30px;">
                Télécharger le pdf <a href="../pdf/stage/Rapport one way.pdf">ici</a>
            </div>
        </div> 
    </div>
    
</div>

<?php 

include ("bot.php");
?>