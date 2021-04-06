<?php 
session_start();
$a = "";

if(isset($_GET["pagina"])){
    $a = $_GET["pagina"];
}
?>


<?php 
    //include($a . '.php'); niet gebruikt omdat anders geen 404 pagina gebruikt kan worden.
    switch($a) { 

        case "":
            include("start.php");
        break;

        case "level_select":
            include("level_select.php");
        break;
            
        case "doolhof1":
            include("doolhof1.php");
        break;
    
        case "doolhof2": 
            include("doolhof2.php");
        break;
        
        case "doolhof3": 
            include("doolhof3.php");
        break;
            
        case "einde":
            include("einde.php");
        break;
            
        case "over":
            include("over.php");
        break;

        case "secret":
            include("secret.php");
        break;

        case "upload_score":
            include("upload_score.php");
        break;

        case "arraymaker":
            //ik kon niks bedenken om een array te implementeren dus ik heb een form gemaakt om een array te maken
            include("arraymaker.php");
        break;

        case "arrayresultaat":
            //uitslag van het maken van de array.
            include("arrayresultaat.php");
        break;

        case "getsession":
            //voor debuggen
            include('getsession.php');
        break;

        case "breaksession":
            //voor debuggen
            include("sessionbreak.php");
        break;

        default:
            include("404.php");
        break;
    } 
?>
 