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
    function terug() {
        window.location.href = 'index.php';
    }
</script> 
<style>
    html {
        background-color: black;
    }
    .button {
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 5%;
    padding-bottom: 5%;
    font-size: 50px;
    border: 3px solid blue;
    display: table;
    margin: 0 auto;
    }
    #doolhof1 {
        background-image: url("doolhof1.png");
        background-repeat: no-repeat;
        background-size: contain;
        object-position: 50% 50%;
    }
    #doolhof2 {
        background-image: url("doolhof2.png");
        background-repeat: no-repeat; 
        background-size: contain; 
        object-position: 50% 50%;
    }
    #randomdoolhof {
        background-image: url("randomdoolhof.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-color: black;
        cursor: pointer;
        object-fit: fill;
    }
    h1 {
        color: white;
        text-align: center;
    }
   #button {
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

<html>
    <body>
        
        
        <h1>level select</h1>

        <a id='randomdoolhof' class='button' onclick='randomdoolhof()'></a><br>

        <a id='doolhof1' class='button' href='index.php?pagina=doolhof1'></a> <br>

        <a id='doolhof2' class='button' href='index.php?pagina=doolhof2'></a>
        <br>
        <div id='button'>
        <button onclick='terug()'>terug</button>
        </div>
        <br><br><br><br>
    </body>
</html>