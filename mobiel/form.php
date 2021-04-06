<!doctype html>

<?php
if(isset($_post["mobieleversie"])){
        $pc = 'false';
        
    }
    else {
        $pc = 'true';
    }
    echo $pc;
    ?>