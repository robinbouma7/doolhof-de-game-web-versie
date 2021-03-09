<?php $a = "";

if(isset($_GET["pagina"])){
    $a = $_GET["pagina"];
}
$pc = true;
if(isset($_GET["pc"])){
    $pc = $_GET["pc"];
}
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php switch($a) {
            case "":
                include("start.php");
            break;

            case "level_select":
                include("level_select.php");
            break;
            
            case "doolhof1":
                include("doolhof1.html");
            break;
    
            case "doolhof2": 
                include("doolhof2.html");
            break;
                    
            case "doolhofmobiel1":
                include("doolhof_mobiel1.html");
            break;

            case "doolhofmobiel2":
                include("doolhof_mobiel2.html");
            break;
            
            case "einde":
                include("einde.html");
            break;
            
            case "opties":
                include("opties.php");
            break;
        } 
         ?>
    </body>
</html>