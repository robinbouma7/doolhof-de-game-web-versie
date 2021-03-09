<!DOCTYPE html>
<title>
    level select
</title>
<?php
$random_doolhof = rand(1, 1);
?>
<script>
    function randomdoolhof() {
        
        var doolhof = parseInt((Math.random() * 1) + 1);

        window.location.href = 'index.php?pagina=doolhof' + doolhof;
        
    }
</script>    

<html>
    <body>
        <h1>work in progress</h1>
        <button onclick='randomdoolhof()'>random doolhof</button><br><br>
        <a href='index.php?pagina=doolhof1'>doolhof 1</a><br><br>
        <br><br><br><br>
        <a href='index.php?pagina=doolhofmobiel1'>doolhof mobiel 1</a><br><br>
    </body>
</html>