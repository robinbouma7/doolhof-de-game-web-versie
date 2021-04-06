<!DOCTYPE html>
<title>
    over het spel
</title>
<style>
    html {
        background-color: black;
        color: white;
        text-align: center;
    }
   button {
        border: 3px blue solid;
        border-radius: 30%;
        background: black;
        color: white;
        cursor: pointer;
   }
</style>
<script>
    function terug() {
        window.location.href = 'index.php';
    }
</script>
<html>
    <body>

        <br><br>

        <h2>
            over het spel
        </h2>

        <p>
            het doel van dit spel is om zo snel mogelijk ricardo naar het einde van het doolhof te brengen, daarnaast kan je ook een munt pakken voor extra punten.<br>
            hoe sneller je bij het einde ben, hoe meer punten. maar let op, elke keer als je beweeg gaan er ook punten af.
        </p>
        
        <br><br>

        <h2>
            controls
        </h2>
        
        <p>
            je beweeg ricardo door de pijltjes toetsen te gebruiken, als je geen keyboard heb kan je de mobiele versie spelen (linker link op home scherm).
        </p>

        <br><br>

        <button onclick="terug()">
            ga terug
        </button>
        
        <br>

    </body>
</html>