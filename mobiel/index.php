<?php 
session_start();
$a = "";
//krijgt de pagina via de pagina variabele in de url.
if(isset($_GET["pagina"])){
    $a = $_GET["pagina"];
}
?>

        <?php switch($a) {
            case "":
                include("start.php");
            break;

            case "level_select":
                include("level_select.php");
            break;
            
            case "doolhof1":
                include("doolhof_mobiel1.php");
            break;
    
            case "doolhof2": 
                include("doolhof_mobiel2.php");
            break;
            
            case "einde":
                include("einde.php");
            break;
            
            case "over":
                include("over.html");
            break;

            case "upload_score":
                include('upload_score.php');
            break;

            case "getsession":
                //voor debuggen
                include('get_session.php');
            break;

            case "secret":
                //leuk geheim voor het spel, alleen bereikbaar via de link.
                include("secret.php");
            break;
    
            default:
                //als er een pagina variabele in de url is toegevoegd die niet in de bovenstaande case's voorkomt gaat hij naar deze pagina.
                include("404.html");
            break;
        } 
         ?>
