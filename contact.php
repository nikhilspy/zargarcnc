<?php
//variable setting
$name = $_REQUEST['Your Name'];
$email = $_REQUEST['Your Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];

//check input fields
if (emplty($name)|| empty($email)||empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("Zargarcnc@gmail.com", "Zargar Cnc Message",$message,"From:$name<$email><$subject>");
    echo "<script type='text/javascript'>alert('Your Message Sent Successfully'); 
    window.history.log(-1);</script>"; 
}
?>