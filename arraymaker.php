<!doctype html>
<title>
arrray voorbeeld
</title>
<style>
<?php
    include('kleuren.css');
?>
html {
    text-align: center;
}
#submit_knop {
    border: 3px blue solid;
    border-radius: 30%;
    background: black;
    color: white;
    cursor: pointer;
}
#text_input {
    border: 3px blue solid;
    border-radius: 10%;
}
</style>
<html>
    <body>
        <h3>
            iki kon geen manier vinden om een array te implementeren in het spel, <br>
            dus daarom deze pagina. hier han je met dit form een array maken.
        </h3>
        <form type='submit' method='post' action='index.php?pagina=arrayresultaat'>
            <p>1e waarde</p>
            <input style='color: black; text-align: center;' id='text_input' type='text' name='1e' required>
            <p>2e waarde</p>
            <input style='color: black; text-align: center;' id='text_input' type='text' name='2e' required>
            <p>3e waarde</p>
            <input style='color: black; text-align: center;' id='text_input' type='text' name='3e' required>
            <p>4e waarde</p>
            <input style='color: black; text-align: center;' id='text_input' type='text' name='4e'required>
            <br><br>
            <input type='submit' id='submit_knop' value='maak array'>
        </form>
    </body>
</html>
