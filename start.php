
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
    padding-left: 24%;
    padding-right: 24%;
    padding-top: 3%;
    padding-bottom: 3%;
    font-size: 50px;
    background:white;
    border: 2px solid blue;
    display: table;
    margin: 0 auto;
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
    <a id='opties_knop' href="index.php?pagina=opties">opties</a>
</div>    
<?php 
echo $pc;
?>
    
    </body>
</html>