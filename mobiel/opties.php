<!DOCTYPE html>
<title>
    opties
</title>


<h1>work in progress</h1>

<a href='index.php'>ga terug</a><br>


<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <input name='mobieleversie' type='checkbox' value='true'>mobiele versie<br>
    <input type="submit" name="submit" value="sla op">  
</form>

<?php
if(isset($_post["mobieleversie"])){
        $pc = $_post["mobieleversie"];
        echo $pc;
    }
    
    
    
?>
        
