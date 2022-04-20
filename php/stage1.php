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
                <h1 style="text-align: center;">One Way formation</h1>
                <br><br>
                <h5>
                    <u>One Way formation</u> est entreprise qui propose un accompagnement et une assistance post-formation à l'utilisation des logiciels de paies et organisation de service RH/paies.
                    <br><br>
                    Le but de se stage était de créer un site web pour l'entreprise One Way formation afin qu'ils puissent se créer une meilleure visibilité et qu'ils puissent se mettre plus en avant. Il fallait donc également montrer via ce site leur professionalisme.
                    <br>
                    Ce dernier leur permettra donc de trouver plus facilement des clients, et par conséquent de se développer.
                </h5>
        </div> 
    </div>
    

    <div class="bulle_2">
        <div class="in_bulle_2">
            <h3 style="text-align: center;">Rapport</h3>
            <div class="pdfcar">
                <iframe class="pdfcomp" src="../pdf/stage/Rapport one way.pdf" width="90%" height="100%"></iframe>
            </div>
            <div style="text-align: center;">
                Télécharger le pdf <a href="../pdf/../pdf/stage/Rapport one way.pdf">ici</a>
            </div>
        </div>
    </div>
</div>

<?php 

include ("bot.php");
?>