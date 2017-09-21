<!DOCTYPE html>
<html>
<head>
	<title>Session Login</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    
    
    <style>
    
         body
        {
            background-color: #ee5351;
        }
        
        #wrapper
        {
            border: 5px solid #881615;
            background-color: #a7271a;
            margin: 10px auto;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }
        
       
            
        
    </style>
    
</head>
<body>
    <div id="wrapper" class="ui-widget">
        <h1 >Please Login to Continue Viewing</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            <br>
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            <br>
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>