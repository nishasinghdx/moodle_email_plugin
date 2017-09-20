<?php
require_once(dirname(__FILE__) . '/../../config.php');
defined('MOODLE_INTERNAL') || die;
echo $OUTPUT->header();
require_login();
$context = context_system::instance();
require_once('registration_form.php');
$mform = new registration_form();
if ($mform->is_cancelled()) {
   echo "form cancelled";
}
else if ($fromform = $mform->get_data()) {

    $insert =  $DB->insert_record('registration', $fromform);
    if($insert){
        include_once('email.php');
    }
}
else {

     if(($_GET['message'])) {
     $message = $_GET['message'];
     //echo $OUTPUT->header();
     echo "<center><h1>$message</h1></center>";
     //echo $OUTPUT->footer();
     }
     else{
       //echo $OUTPUT->header();
       $mform->set_data($toform);
       $mform->display();
       //echo $OUTPUT->footer();
     }
}
echo $OUTPUT->footer();
 ?>
