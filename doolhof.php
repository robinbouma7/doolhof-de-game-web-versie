<!DOCTYPE html>

<title>
    doolhof
</title>
<?php
echo "test";
?>
<style>
    html {
        background: black;
        height: 100%; 
        overflow: hidden
    }
</style>

<html>
    <script>
        var time_interval_var;
		var interrupt_interval_var;
        var alive = true;
        var collected = false;
        
        function get_key(event) {
            console.log("levend: " + alive);
            var left_old, left_new;
            
            if(alive === true) {

                top_old = parseInt(document.getElementById('player').style.top);
                left_old = parseInt(document.getElementById('player').style.left);
                score_old = parseInt(document.getElementById('score').innerHTML); 
                bottom_edge = parseInt(document.getElementById('player').style.top) + parseInt(document.getElementById('player').style.height);
                right_edge = parseInt(document.getElementById('player').style.left) + parseInt(document.getElementById('player').style.width);
                
                switch(event.keyCode) {
                    
                    case 37:
                        // links
                        if (left_old > 0) {
                            document.getElementById('player').style.left = left_old - 4 + '%';
                            document.getElementById('score').innerHTML =  (score_old - 25);
                            var randomsound = parseInt(Math.random() * 3)
                            console.log(randomsound);
                            
                            if(randomsound < 1){
                                document.getElementById('movement1').play();
                                console.log("s1");
                            }

                            else {
                                document.getElementById('movement2').play();
                                console.log("s2");
                            }
                        
                            break;
                        }
                        
                        else {
                            break;
                        }
                    case 38:
                        // omhoog
                        if (top_old > 0) {
                            document.getElementById('player').style.top = top_old - 4 + '%';
                            document.getElementById('score').innerHTML =  (score_old - 25);
                            var randomsound = parseInt(Math.random() * 3)
                            console.log(randomsound);
                            if(randomsound < 1){
                                document.getElementById('movement1').play();
                                console.log("s1");
                            }

                            else {
                                document.getElementById('movement2').play();
                                console.log("s2");
                            }
                    
                            break;
                        }
                        
                        else {
                            break;
                        }
                    case 39:
                        // rechts
                        if (right_edge <= 99) {
                            document.getElementById('player').style.left = left_old + 4 + '%';
                            document.getElementById('score').innerHTML =  (score_old - 25);
                            var randomsound = parseInt(Math.random() * 3)
                            console.log(randomsound);
                            if(randomsound < 1){
                                document.getElementById('movement1').play();
                                console.log("s1");
                            }

                            else {
                                document.getElementById('movement2').play();
                                console.log("s2");
                            }
                            break;
                        }
                        
                        else{
                            break; 
                        }
                
                        
                    case 40:
                        // omlaag
                        if (bottom_edge <= 99) {
                            document.getElementById('player').style.top = top_old + 4 + '%';
                            document.getElementById('score').innerHTML =  (score_old - 25);
                            var randomsound = parseInt(Math.random() * 3)
                            console.log(randomsound);
                            if(randomsound < 1){
                                document.getElementById('movement1').play();
                                console.log("s1");
                            }

                            else {
                                document.getElementById('movement2').play();
                                console.log("s2");
                            }
                            break;
                        }
                        
                        else {
                            break;
                        }
                        
                        
                    
                    default:

                    
                        
                }
                collision()
                finish_check()
                coin_collect()
                //onderstand is muziek starten als je beweeg, zodat het ook op chrome werkt.
                document.getElementById('muziek').loop = true;
                document.getElementById('muziek').play();
            }
            else if (alive === false) {
                console.log('dead');
            }
        }

        function score() {
            score_old = parseInt(document.getElementById('score').innerHTML); 

            document.getElementById('score').innerHTML =  (score_old - 1);
        }          

		function interrupt_interval() {
			clearInterval(time_interval_var);
		}

		function start_interval() {
			time_interval_var = setInterval(score, 10);
        }

        function reset_timer() {
            score_old = parseInt(document.getElementById('score').innerHTML); 
            clearInterval(time_interval_var);
            document.getElementById('score').innerHTML =  10000;
        }

        

        function finished() {
            clearInterval(time_interval_var);
        }



        function collision() {
            
            player.top = parseInt(document.getElementById('player').style.top);
            player.left = parseInt(document.getElementById('player').style.left);
            player.bottom = parseInt(document.getElementById('player').style.top) + parseInt(document.getElementById('player').style.height);
            player.right = parseInt(document.getElementById('player').style.left) + parseInt(document.getElementById('player').style.width);      
            //als het maximale getal te hoog is werkt de finish niet.
                for(var i = 1; i < 42; ++i) {
                var muur = "muur"
                //0.01 steeds zodat er geen collision is als ze elkaar raken maar niet overlappen.
                var muur_top = parseInt(document.getElementById('muur' + i).style.top) + 0.01;
                var muur_left = parseInt(document.getElementById('muur' + i).style.left) + 0.01;
                var muur_bottom = parseInt(document.getElementById('muur' + i).style.top) + parseInt(document.getElementById('muur' + i).style.height) - 0.01;
                var muur_right = parseInt(document.getElementById('muur' + i).style.left) + parseInt(document.getElementById('muur' + i).style.width) - 0.01;       
                
            
                
                if (player.top > muur_bottom || player.right < muur_left || player.bottom < muur_top || player.left > muur_right) {
                
                    console.log("collision false");
                

                }
                
                else {
                    console.log("collision true");
                    document.getElementById('explosion').play();
                    //voor makkelijker testen volgende 2 regels comments maken.
                    alive = false;
                    setTimeout(reset_player, 1000);
                }
                
            }

        }
        function finish_check() {
            
            player.top = parseInt(document.getElementById('player').style.top);
            player.left = parseInt(document.getElementById('player').style.left);
            player.bottom = parseInt(document.getElementById('player').style.top) + parseInt(document.getElementById('player').style.height);
            player.right = parseInt(document.getElementById('player').style.left) + parseInt(document.getElementById('player').style.width);      
            
            
            
            var finish_top = parseInt(document.getElementById('finish').style.top) + 0.01;
            var finish_left = parseInt(document.getElementById('finish').style.left) + 0.01;
            var finish_bottom = parseInt(document.getElementById('finish').style.top) + parseInt(document.getElementById('finish').style.height) - 0.01;
            var finish_right = parseInt(document.getElementById('finish').style.left) + parseInt(document.getElementById('finish').style.width) - 0.01;       
            

            console.log(document.getElementById("finish"));
           
            if (player.top > finish_bottom || player.right < finish_left || player.bottom < finish_top || player.left > finish_right) {
            
                console.log("playing");
            

            }
            
            else {
                console.log("finished");
                document.getElementById('victory').play();
                finished();
            }
            
            

        }

        function make_coin() {
            var number = parseInt((Math.random() * 3) + 1);
            console.log(number);
            
            if (number < 2) {
                var anchor = document.getElementById("coin");
                var coin = document.createAttribute("style");      
                coin.value = "visibility: visable; position: absolute; content:url(coin.png); left:36%; top: 86%; width: 4%; height: 10%; background-color: #00009900; color: white; text-align: center;";                          
                anchor.setAttributeNode(coin);                          
            }
            
            else if (number > 2) {
                var anchor = document.getElementById("coin");
                var coin = document.createAttribute("style");      
                coin.value = "visibility: visable; position: absolute; content:url(coin.png); left:68%; top: 72%; width: 4%; height: 10%; background-color: #00009900; color: white; text-align: center;";                          
                anchor.setAttributeNode(coin);   
            }
            
            else {
                var anchor = document.getElementById("coin");
                var coin = document.createAttribute("style");      
                coin.value = "visibility: visable; position: absolute; content:url(coin.png); left:52%; top: 4%; width: 4%; height: 10%; background-color: #00009900; color: white; text-align: center;";                          
                anchor.setAttributeNode(coin);   
            }
                
        }

        function coin_collect() {
             
            
            player.top = parseInt(document.getElementById('player').style.top);
            player.left = parseInt(document.getElementById('player').style.left);
            player.bottom = parseInt(document.getElementById('player').style.top) + parseInt(document.getElementById('player').style.height);
            player.right = parseInt(document.getElementById('player').style.left) + parseInt(document.getElementById('player').style.width);      
            
            
            if (collected === false) {
                //0.01 steeds zodat er geen collision is als ze elkaar raken maar niet overlappen.
                var coin_top = parseInt(document.getElementById('coin').style.top) + 0.01;
                var coin_left = parseInt(document.getElementById('coin').style.left) + 0.01;
                var coin_bottom = parseInt(document.getElementById('coin').style.top) + parseInt(document.getElementById('coin').style.height) - 0.01;
                var coin_right = parseInt(document.getElementById('coin').style.left) + parseInt(document.getElementById('coin').style.width) - 0.01;       
                
                console.log(document.getElementById('coin'));
                
            
                
                    if (player.top > coin_bottom || player.right < coin_left || player.bottom < coin_top || player.left > coin_right) {
                    
                        console.log("no coin collected");
                        

                    }
                        
                    else {
                                score_old = parseInt(document.getElementById('score').innerHTML);
                        console.log("coin collected");
                        document.getElementById('score').innerHTML =  (score_old + 1000);
                        document.getElementById('coin_collect').play();
                        //verplaatst coin offscreen zodat hij verdwijnt maar wel weer kan worden gemaakt als je dood ga.
                        document.getElementById('coin').style.visibility = 'hidden';
                        collected = true;
                            
                    }
                    
            }

                    else {
                        console.log("collected: " + collected + ' (false)')
                    }
                    
                    
        }
        

        function reset_player() {
            document.getElementById('player').style.top =  45 +  "%";
            document.getElementById('player').style.left =  0 + "%";  
            reset_timer();
            start_interval();
            alive = true;
            collected = false;
            make_coin();
        }
        

    </script>
    <body onkeydown="get_key(event)" onload="reset_player(); coin_collect()">
        <main>   
        
		
            <div id="muur1" style="position: absolute; top: 42%; left: 0%; height: 1%; width: 11%; background-color: white;"></div>
            
            <div id="muur2" style="position: absolute; top: 56%; left: 0%; height: 1%; width: 11%; background-color: white;"></div>
         
            <div id = "muur3" style="position: absolute; top: 0%; left: 0%; height: 2%; width: 100%; background-color: white;"></div> 
            
            <div id = "muur4" style="position: absolute; top: 2%; left: 0%; height: 40%; width: 2%; background-color: white;"></div>
            
            <div id="muur5" style="position: absolute; top: 57%; left: 0%; height: 41%; width: 2%; background-color: white;"></div>

            <div id="muur6" style="position: absolute; top: 98%; left: 0%; height: 2%; width: 100%; background-color: white;"></div>

            <div id="muur7" style="position: absolute; top: 0%; left: 94%; height: 8%; width: 6%; background-color: white;"></div>

            <div id="muur8" style="position: absolute; top: 15%; left: 9%; height: 12%; width: 1%; background-color: white;"></div>

            <div id="muur9" style="position: absolute; top: 27%; left: 9%; height: 1%; width: 9%; background-color: white;"></div>

            <div id="muur10" style="position: absolute; top: 27%; left: 17%; height: 40%; width: 1%; background-color: white;"></div>

            <div id="muur11" style="position: absolute; top: 15%; left: 17%; height: 1%; width: 18%; background-color: white;"></div>

            <div id="muur12" style="position: absolute; top: 15%; left: 25%; height: 20%; width: 1%; background-color: white;"></div>

            <div id="muur13" style="position: absolute; top: 43%; left: 83%; height: 1%; width: 17%; background-color: white;"></div>

            <div id="muur14" style="position: absolute; top: 56%; left: 75%; height: 1%; width: 25%; background-color: white;"></div>

            <div id="muur15" style="position: absolute; top: 48%; left: 18%; height: 1%; width: 37%; background-color: white;"></div>

            <div id="muur16" style="position: absolute; top: 67%; left: 10%; height: 16%; width: 1%; background-color: white;"></div>

            <div id="muur17" style="position: absolute; top: 65%; left: 25%; height: 1%; width: 13%; background-color: white;"></div>

            <div id="muur18" style="position: absolute; top: 83%; left: 10%; height: 1%; width: 16%; background-color: white;"></div>

            <div id="muur19" style="position: absolute; top: 65%; left: 25%; height: 19%; width: 1%; background-color: white;"></div>

            <div id="muur20" style="position: absolute; top: 34%; left: 34%; height: 1%; width: 8%; background-color: white;"></div>

            <div id="muur21" style="position: absolute; top: 15%; left: 42%; height: 20%; width: 1%; background-color: white;"></div>

            <div id="muur22" style="position: absolute; top: 15%; left: 42%; height: 1%; width: 15%; background-color: white;"></div>

            <div id="muur23" style="position: absolute; top: 2%; left: 57%; height: 14%; width: 1%; background-color: white;"></div>

            <div id="muur24" style="position: absolute; top: 83%; left: 34%; height: 1%; width: 12%; background-color: white;"></div>

            <div id="muur25" style="position: absolute; top: 65%; left: 46%; height: 19%; width: 1%; background-color: white;"></div>

            <div id="muur26" style="position: absolute; top: 65%; left: 46%; height: 1%; width: 10%; background-color: white;"></div>

            <div id="muur27" style="position: absolute; top: 84%; left: 56%; height: 14%; width: 1%; background-color: white;"></div>

            <div id="muur28" style="position: absolute; top: 84%; left: 66%; height: 1%; width: 25%; background-color: white;"></div>

            <div id="muur29" style="position: absolute; top: 8%; left: 98%; height: 35%; width: 2%; background-color: white;"></div>

            <div id="muur30" style="position: absolute; top: 57%; left: 98%; height: 41%; width: 2%; background-color: white;"></div>

            <div id="muur31" style="position: absolute; top: 43%; left: 66%; height: 41%; width: 1%; background-color: white;"></div>

            <div id="muur32" style="position: absolute; top: 70%; left: 67%; height: 1%; width: 24%; background-color: white;"></div>

            <div id="muur33" style="position: absolute; top: 83%; left: 34%; height: 15%; width: 1%; background-color: white;"></div>

            <div id="muur34" style="position: absolute; top: 31%; left: 74%; height: 1%; width: 13%; background-color: white;"></div>

            <div id="muur35" style="position: absolute; top: 32%; left: 55%; height: 17%; width: 1%; background-color: white;"></div>

            <div id="muur36" style="position: absolute; top: 32%; left: 56%; height: 1%; width: 10%; background-color: white;"></div>

            <div id="muur37" style="position: absolute; top: 15%; left: 66%; height: 1%; width: 20%; background-color: white;"></div>

            <div id="muur38" style="position: absolute; top: 43%; left: 66%; height: 1%; width: 8%; background-color: white;"></div>

            <div id="muur39" style="position: absolute; top: 43%; left: 66%; height: 1%; width: 8%; background-color: white;"></div>

            <div id="muur40" style="position: absolute; top: 31%; left: 74%; height: 13%; width: 1%; background-color: white;"></div>

            <div id="muur41" style="position: absolute; top: 15%; left: 86%; height: 16%; width: 1%; background-color: white;"></div>

            <div id="muur42" style="position: absolute; top: 31%; left: 74%; height: 1%; width: 13%; background-color: white;"></div>

            
            <p id="score_text"style="color: black; position:absolute; left: 96%; top:  0%; ">
                score:
            </p>
            
            <p id="score"style="color: black; position:absolute; left: 96%; top:  2%;">
                10000
            </p>
           
            <div id="finish" style="position: absolute; top: 44%; left: 94%; height: 12%; width: 6%; background-color: green;"></div>
            
            <!--offscreen xodat hij niet zichtbaar is totdat er een plek is gevonden-->
            <div id="coin" class="image"></div>
            
            <div id="player" class="image" style="position: absolute; content:url(Ricardo.png); left:0%; top: 45%; width: 4%; height: 10%; background-color: #00009900; color: white; text-align: center;" ></div>

            <audio id="movement1">
                <source src="movement1.mp3" type="audio/mp3">
            </audio>
            
            <audio id="movement2">
                <source src="movement2.mp3" type="audio/mp3">
            </audio>
            
            <audio id="explosion">
                <source src="explosion.mp3" type="audio/mp3">
            </audio>
            
            <audio id="victory">
                <source src="victory.mp3" type="audio/mp3">
            </audio>

            <audio id="coin_collect">
                <source src="coin.mp3" type="audio/mp3">
            </audio>
            
            <!--de muziek. werkt niet in chrome omdat daar autoplay geblokkeerd is. dus daar speelt het als je beweegt. als de muziek irritant is kan je van de volgende 3 lijnen een comment maken.-->
            <audio id="muziek" autoplay loop>
                <source src="muziek.mp3" type="audio/mp3">
            </audio>
            
            

        </main>
    </body>
</html>