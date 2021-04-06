<!DOCTYPE html>

<title>
    einde!!!
</title>

<style>
    html {
        background: black;
        color: white;
    }
    
    h1 {
        border: 1px blue solid;
        padding: 1%;
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        color: white;
    }
    #score {
        text-align: center;
        color: white;
        font-size: 200%;
        border: 1px blue solid;
        margin-left: 45%;
        margin-right: 45%;
        padding-top: 0.5%;
        padding-bottom: 0.5%;
    }
    #highscore {
        text-align: center;
        color: white;
        font-size: 100%;
        border: 1px blue solid;
        margin-left: 40%;
        margin-right: 40%;
        padding-top: 0.5%;
        padding-bottom: 0.5%;
    }
    div {
        text-align: center;
    }
    button {
        border: 3px blue solid;
        border-radius: 30%;
        background: black;
        color: white;
        cursor: pointer;
    }
    #form {
        text-align: center;
        color: white;
        font-size: 100%;
        border: 1px blue solid;
        margin-left: 38%;
        margin-right: 38%;
        padding-top: 0.5%;
        padding-bottom: 0.5%;
    }
    #form_submit {
        border: 3px blue solid;
        border-radius: 30%;
        background: black;
        color: white;
        cursor: pointer;
    }
    #form_naam {
        border: 3px blue solid;
        border-radius: 10%;
        text-align: center;
    }

</style>
<script>

    function score() {
        document.getElementById("score").innerHTML = 'score:<br><br>' + sessionStorage.getItem('score');
        document.getElementById("doolhof").innerHTML = 'doolhof ' + sessionStorage.getItem('doolhof');
        console.log(sessionStorage.getItem('score'));
        console.log( sessionStorage.getItem('doolhof'));
        document.getElementById("score-js").value = sessionStorage.getItem('score');
        document.getElementById("doolhof-js").value = sessionStorage.getItem('doolhof');
    }

    function vorigdoolhof() {
        doolhof = sessionStorage.getItem('doolhof');
        window.location.href = 'index.php?pagina=doolhof' + doolhof;
    }

    function home() {
        window.location.href = 'index.php';
    }

    function levels() {
        window.location.href = 'index.php?pagina=level_select';
    }
    
</script>
<html>
    <body onload="score()">
        
        <h1 id='doolhof'></h1><br>
        
        <p id='score'></p><br>
        
        <p id='highscore'>

            <?php
                $score="nog geen score gezet";
                $doolhof="geen doofhof gevonden";

                $score = $_GET["score"];
                $doolhof = $_GET["doolhof"];

                if(!isset( $_SESSION["score"])) {
                    $_SESSION["score"] = '0';
                }

                if ($score > $_SESSION["score"] && $doolhof === '1') {
                    $_SESSION["score"] = $score;
                    echo 'nieuwe high score op doolhof 1: ' . $score . '!!';
                }

                elseif ($score === $_SESSION["score"]  && $doolhof === '1'){
                    echo 'gelijk aan je hoogste score op doolhof 1. namelijk: ' . $_SESSION["score"] . '.';
                }

                elseif ($score < $_SESSION["score"] && $doolhof === '1') {
                    echo 'geen verbetering helaas. je high score op doolhof 1 is: ' . $_SESSION["score"];
                }

                elseif ($score > $_SESSION["score"] && $doolhof ==='2') {
                    $_SESSION["score"] = $score;
                    echo 'nieuwe high score op doolhof 2: ' . $score . '!!';
                }

                elseif ($score === $_SESSION["score"] && $doolhof === '2'){
                    echo 'gelijk aan je hoogste score op doolhof 2. namelijk: ' . $_SESSION["score"] . '.';
                }

                elseif ($score < $_SESSION["score"] && $doolhof === '2') {
                    echo 'geen verbetering helaas. je high score op doolhof 2 is: ' . $_SESSION["score"];
                }

                else {
                    echo 'geen score. dit hoort niet te verschijnen. ';
                }
                $_SESSION['pogingen'] = $_GET['pogingen'];
            ?>
        </p>
        <br>
        <div id='form'>
            <p>
                wil je je score uploaden? vul dan hier je naam in en klik op submit.<br>
                let op, als je dezelfde naam gebruik wis je je vorige score.
            </p>
            <form action="index.php?pagina=upload_score" method="post">
                <input style='color: black;' type="text" name="naam" id='form_naam' value='<?php if (isset($_SESSION['naam'])) {  echo $_SESSION['naam']; }   ?>'><br>
                <input type="hidden" id="score-js" name="score_js" value="">
                <input type="hidden" id="doolhof-js" name="doolhof_js" value="">
                <input type='hidden' name="score_php" value="<?php echo $_GET["score"]; ?>"><br>
                <input type='hidden' name='doolhof' value="<?php echo $_GET["doolhof"]; ?>">
                <input type='hidden' name='session_score' value='<?php echo $_SESSION["score"]?>'>
                <input type='hidden' name='pogingen' value='<?php echo $_SESSION['pogingen']?>'>
                <input type="submit" id="form_submit">
                <br>
            </form>
        </div>

        <br><br>

        <div>
            <button id='nogeenkeer' onclick='vorigdoolhof()'>
                nog een keer proberen
            </button><br><br><br>
            
            <button onclick='levels()'>
                ander level
            </button><br><br><br>
            
            <button onclick='home()'>
                home scherm
            </button>
        </div>
    </body>
</html>