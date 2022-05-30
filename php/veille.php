<?php 

 include ("top.php");
?>
<div class="sun"></div>
    <img src="../image/plan.png" class="plan">
    <img src="../image/mongolfiere.png" class="mongo">
    <div class="bg"></div>
    <script>
        const body = document.querySelector('body');
        body.classList.toggle('debutnuit')
    </script>
<div class="carré_index">
    <div class="bulle_1">
        <div class="in_bulle_1">
            <h3> Qu'est-ce que la veille technologique ?</h3>
            <br><br>
            La veille technologique, Cela consiste à surveiller les nouveautés sur nouvelle technologique, cela peut permettre d'itentifier ou d'anticiper des innovations par secteur d'activité, pour moi c'est la nouvelle technologie, les nouveaux langages qui peut apparaitre ou encore des problémes qui se sont passé (hackage, faille dans une sertaine sécurité ...).<br><br>
            Les sources de veille technologique consituent  une information stratégique incontournable pour devancer, développer et exploiter des inventions afin d'avoir d'être toujours à joure sur les nouvelles technologiques et cela permet aussi de filtrer les informations.
        </div> 
    </div>
    

    <div class="bulle_2">
        <div>
            <img src="../image/feedly.png" style="height: 500px; width: 900px; border-radius:30px">
        </div>
    </div>
</div>

<?php 

include ("bot.php");
?>