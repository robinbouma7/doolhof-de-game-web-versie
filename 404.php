<!DOCTYPE html>
<title>
    404, page not found. F.
</title>
<?php
//dzez code zorgt als er geen pagina is dat hij automatish naar de home pagina gaat in plaats van deze pagina zodat je niet altijd ?pagina=start er achter moet hebben.,
if(!isset($_GET['pagina'])) {
    header("Location: index.php?pagina=start");
}
?>
<style>
    <?php include('kleuren.css'); ?>
    html {
        text-align: center;
    }
    h1 {
        font-size: 400%;
    }
    p {
        font-size: 150%;
    }
    
</style>
<html>
    <body>
        <h1>
            404
        </h1>
        <p>
            oh nee! de pagina die je wou krijgen is niet gevonden, dit is meestal een bug.<br>
            neem a.u.b. contact op met de maker van het spel op het volgende e-mail adres om de bug door te geven:<br>
            robin.bouma@std.stellingwerfcollege.nl<br><br>
            klik op ricardo om terug te gaan naar het home scherm.
        </p><br>
        <a href='index.php'> 
            <img src='ricardo.png' href='index.php?pagina=start'></img>
        </a><br><br>
        
    </body>
</html>