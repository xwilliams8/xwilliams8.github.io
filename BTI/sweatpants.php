<?php
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sweatpants - Because the Internet</title>
    
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.6/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <style>
        #title
        {
            text-align: center;
        }
        
        
        body
        {
            background-color: #ee5351;
        }
        
        .wrapper
        {
            border: 5px solid #881615;
            background-color: #a7271a;
            margin: 10px auto;
            border-radius: 10px;
            
            
        }
        
        #content
        {
            align-self: center; 
            width: 973px;
            margin: 10px;
            margin-left: 178px;
            float: left;
            text-align: center;
            color: black;
        }
        
        #navigation
        {
            float: left;
            margin-left: auto;
            width: 150px;
            text-align: center;
            position: fixed;
        }
        
        #link
        {
            color: #f3658d;
            
        }
        
        #total
        {
            width: 1334px;
        }
        
        .dropdown
        {
            list-style-type: none;
        }
        
        .group:after 
            {
			  content: "";
			  display: table;
			  clear: both;
			}
        
        #cover
        {
            display: block;
            margin: 0 auto;
        }
        
        iframe
        {
            display: block;
            margin: 0 auto;
        }
        
        p, h2
        {
           color: black;
        }
        
    </style>
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>
    
        function getLyrics(song) {
        
        
        $.get("lyrics.php", {song:song},
         
              function(song) {
            $("#lyricbox").html(song); 
        });
            

        }
    
    </script>
    
</head>
    
<body>    
    <h1 id="title">"Sweatpants"</h1>
    
<div id="total">
    
    <div class="wrapper" id="navigation">
         <li role="presentation" class="dropdown">
            <a id="link" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Navigation <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="BTIhome.html" id="link">Home</a>
              </li>
              <li>
                <a href="introcrawl.php" id="link">The Library(Intro)/Crawl</a>
              </li>
              <li>
                 <a href="WORLDSTAR.php" id="link">WORLDSTAR</a> 
              </li>
              <li>
                <a href="theworstguys.php" id="link">Dial Up/The Worst Guys</a>
              </li>
              <li>
                 <a href="shadows.php" id="link">Shadows</a> 
              </li>
              <li>
                <a href="telegraph.php" id="link">Telegraph Ave ("Oakland by Lloyd")</a>
              </li>
              <li>
                <a href="sweatpants.php" id="link">Sweatpants</a>
              </li>
              <li>
                <a href="3005.php" id="link">3005</a>  
              </li>
              <li>
                   <a href="theparty.php" id="link">Playing Around Before the Party/The Party</a>
              </li>
              <li>
                <a href="noexit.php" id="link">No Exit</a>
              </li>
              <li>
                <a href="flightofthenavigator.php" id="link">Death By Numbers/Flight of the Navigator</a>
              </li>
              <li>
                <a href="zealots.php" id="link">Zealots of Stockholm (Free Information)</a>
              </li>
              <li>
                <a href="urn.php" id="link">Urn</a>
              </li>
              <li>
                <a href="pinktoes.php" id="link">Pink Toes</a>
              </li>
              <li>
                <a href="earth.php" id="link">Earth: The Oldest Computer (The Last Night)</a>
              </li>
              <li>
                <a href="life.php" id="link">Life: The Biggest Troll (Andrew Auernheimer)</a>
              </li>
               <li>
                <a href="logout.php" id="link">Logout</a>
              </li>    
            </ul>
         </li>
        </div>
    
    <div id="content" class="wrapper">
    
        <h2>Official Video</h2>
        
        <iframe width="600" height="400" src="https://www.youtube.com/embed/ExVtrghW5Y4?autoplay=0"></iframe>
        
        <br><br>
            <audio controls>
            <source src="album/Sweatpants.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <br><br>
        <form>
            <input type="button" value="Get Lyrics" onclick="getLyrics('sweatpants')">
        </form>
        
        <br><br>
    
        <div id="lyricbox"></div>
        
        
    </div>
</div>
    
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jslibs/jquery-2.1.4.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    
</body>

</html>