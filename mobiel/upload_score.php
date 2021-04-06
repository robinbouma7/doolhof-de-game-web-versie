<?php
$file = "scores/" .  $_POST["naam"] . $_POST["doolhof"] . ".txt";
$txtfile = fopen($file, "w") or die("Unable to open file!");
$naam = "naam: " . $_POST["naam"] . "\n";
fwrite($txtfile, $naam);
$js_score = "js score: " . $_POST["score_js"] . "\n";
fwrite($txtfile, $js_score);
$php_score = "php score: " . $_POST["score_php"] . "\n";
fwrite($txtfile, $php_score);
$doolhof_js = "js doolhof: " . $_POST["doolhof_js"] . "\n";
fwrite($txtfile, $doolhof_js);
$doolhof = "php doolhof: " . $_POST["doolhof"] . "\n";
fwrite($txtfile, $doolhof);
$session_score = "score session: " . $_POST["session_score"] . "\n";
fwrite($txtfile, $session_score);
$pogingen = "pogingen: " . $_POST["pogingen"];
fwrite($txtfile, $pogingen);
fclose($txtfile);
?>
<script>
    function terug() {
        window.location.href = 'index.php?pagina=einde&score=<?php echo $_POST["score_php"] ?>&doolhof=<?php echo $_POST["doolhof"] ?>&pogingen=<?php echo $_POST['pogingen']; ?>';
    }
</script>
<style>
    <?php include("kleuren.css");?>
    html {
        text-align: center;
    }
</style>
<p>score geupload. als je per ongeluk een lagere score dan eerder heb geupload neem contact op met de maker.</p>
<button onclick='terug()'>ga terug</button>