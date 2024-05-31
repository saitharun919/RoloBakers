<?php
// get the message information from the form POST object

$msg = $_POST['message'];
$nm = $_POST['name'];
$mailid = $_POST['email'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if( mail("rolobakers24@gmail.com","Online Order For Rolo Bakery ", $msg, $nm) ){
    // Redirect to Home page 

            header('Location: home.html');
}else{
    // Redirect to error page 

            header('Location: error.html');
}

?>