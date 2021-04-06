<!doctype html>
<title>
    resultaat array
</title>
<style>
    <?php
    include('kleuren.css');
    ?>
    html {
        text-align: center;
    }
    #in_box {
        border: 1px blue solid;
        padding: 1%;
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        color: white;
    }
</style>
<html>
    <body>
        <?php
        $eerste = $_POST["1e"];
        $tweede = $_POST["2e"];
        $derde = $_POST["3e"];
        $vierde = $_POST["4e"];
        $array = array($eerste, $tweede, $derde, $vierde);
        ?>
        <h1>uw zelfgemaakde array is:</h1>
        <p id='in_box'>
            <?php
            echo '1e variabele:<br><br>' . $array[0] . '<br><br>2e variabele:<br><br>' . $array[1] . '<br><br>3e variabele:<br><br>' . $array[2] . '<br><br>4e variabele:<br><br>' . $array[3] . '<br><br>';
            ?>
             er zijn <?php echo count($array); ?> variabelen opgegeven.
        </p>

        <p id='in_box'>
            als je deze array in php wil gebruiken is je array:<br><br>

            $array = array(<?php echo $eerste . ', ' . $tweede . ', ' . $derde . ', ' . $vierde; ?>);<br><br>
            
            met aanroepen gebruik je: echo $array[0]; voor de eerste,<br>
            echo $array[1]; voor de tweede, echo $array[2]; voor de derde<br>
            en echo $array[3]; voor de vierde.          
        </p>
       
        
    </body>
</html>