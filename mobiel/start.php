
<!DOCTYPE html>
<meta name='viewport' content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<html>
<style>
html {
    background: rgb(0, 0, 0);
}
#onder_tekst {
    text-align: center;
    margin-top: -1%;
    color: white;
}

#naam_game {
    text-align: center;
    font-size: 50px;
    color: white;
}

#start_knop{
    padding-left: 25%;
    padding-right: 25%;
    padding-top: 3%;
    padding-bottom: 3%;
    font-size: 50px;
    background:white;
    border: 2px solid blue;
    display: table;
    margin: 0 auto;
}

#opties_knop{
    padding-left: 25%;
    padding-right: 25%;
    padding-top: 3%;
    padding-bottom: 3%;
    font-size: 50px;
    background:white;
    border: 2px solid blue;
    display: table;
    margin: 0 auto;
}
#link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
    margin: 5%;
    font-size: 150%;
}

#links {
    text-align: center;
}

</style>
    <head>

    </head>
    <body>
    <h1 id='naam_game'>doolhof, de game!</h1>
    <h3 id='onder_tekst'>ft. ricardo</h3>
    <br><br>
<div>   
    <a id='start_knop' href="index.php?pagina=level_select">start</a>
</div>
<br><br><br><br>
<div>
    <a id='opties_knop' href="index.php?pagina=over">over</a>
</div>  
<br><br><br>
<div id='links'>
<a id='link' href='https://www.swcin.nl/robinbouma/PO3/index.php'>pc versie</a> <a id='link' href='https://www.swcin.nl/robinbouma/PO1/robin.html'>profiel pagina</a>  
</div>
<?php 
echo $pc;
?>
    
    </body>
</html>