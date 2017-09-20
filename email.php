<?php
require_once(dirname(__FILE__) . '/../../config.php');

$fname=$fromform->name;
$femail=$fromform->email;
$fmobile=$fromform->mobile;
$faddress=$fromform->address;

$from=new stdClass();
$from->firstname ="Rupinder";
$from->lastname = "Kaur";
$from->email ="rupinder.dx@gmail.com";
$from->maildisplay = true;
$from->mailformat = 1;

$subject="moodle alert";
$messageText="new user"." ".$fname." "."signed in.\n Email address is."." ".$femail." "."\nAddress is"." ".$faddress." ".".\nMobile number is"." ".$fmobile;

$to=array();
$to=get_admins();
//print_r($to);
foreach($to as $value){
  $send=email_to_user($value, $from, $subject, $messageText);
     if($send){
       //echo "...email sent";
      // redirect('index.php', 'Message sent', null);
      $thankyou="Thank you !!";
      header("Location: index.php?message=$thankyou");
     }
     else{
       //echo "....email not sent";
      //header("Location: index.php");
     }
}//end of foreach loop


?>
