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
        
            <style>
               
        
            </style>
        
            <script>
            
            </script>
    </head>
    
    <body>
<!--        navbar-->
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
<!--        navbar end-->
        <?php
$i=0;
foreach($_GET as $key => $value){
//    print "$key = $value <br>\n";
    if($value == yes){
        $i +=1;
    }
}
if($i == 3){
    print '<h1 class="container well text-center" >100% ٩(๑˃̵ᴗ˂̵)و  ٩(๑˃̵ᴗ˂̵)و  ٩(ˊᗜˋ*)و YAY!!!</h1>';
}
else{
    print '<div class="container well text-center" ><h1 >Nice try you only got a ' . $i . ' out of 3.. That makes you a fake fan!</h1><br> <h1 >Better luck next time!</h1></div>';
}
?>
        
    </body>
</html>
