<?php 
      if($_COOKIE['username'] == "test"){
      header("Location: fanzoneboot.html");
      }
?>
    
<!DOCTYPE html>
<html>
    <head>
    
            <title>Sir Patrick Stewart Fan Page</title>
        <meta charset="utf-8">
<!--        bootstrap scripts-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

        


        <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        
    <script>
        $(function(){
            $("#input[type=submit]").button;
          
        });
        
    </script>
</head>
<body>
    <!--        nav-->
    
    <nav class="navbar navbar-inverse">
  <div class="container">
    
    <ul class="nav navbar-nav">
     <li ><a href="homeboot.html">Home</a></li>
     <li><a href="aboutboot.html">About</a></li>
     <li><a href="quizboot.html">Quiz</a></li>
     <li><a href="galleryboot.html">Gallery</a></li>
     <li><a href="login.php">Superfan Zone</a></li>


    </ul>
    
  </div>
</nav>
    <!--        end nav-->
    <div id="loginWidget" class="ui-widget container well center-block">
        <h1 class="ui-widget-header">Login</h1>
        <br>
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="process.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            <br>
            <div class="stack">
                <label for="password">Pass:</label>
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