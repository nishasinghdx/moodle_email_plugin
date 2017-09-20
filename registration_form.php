<?php
//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
require_once(dirname(__FILE__) . '/../../config.php');
 ?>
<style media="screen">
<?php
include_once("form_style.css");
?>
</style>

<?php
//echo "....registration form......";
class registration_form extends moodleform {
    //Adding elements to form
    public function definition() {
        global $CFG;

        $mform = $this->_form;

        $mform->addElement('text', 'name', get_string('name'));
        $mform->addRule('name', 'name field is required', 'required', 'alphanumeric', 'server', false, false);

        $mform->addElement('text', 'email', get_string('email','local_email'));
        $mform->setType('email', PARAM_NOTAGS);
        $mform->addRule('email', 'email is required', 'required', 'alphanumeric', 'server', false, false);
        $mform->addRule('email', 'enter valid email address', 'email', 'alphanumeric', 'server', false, false);

        $mform->addElement('password', 'password', get_string('password'));
        $mform->setType('password', PARAM_NOTAGS);
        $mform->addRule('password', 'password is required', 'required', 'alphanumeric', 'server', false, false);

        $mform->addElement('text', 'mobile', 'mobile number', 'maxlength="10"');
        $mform->addRule('mobile', 'mobile number is required', 'required');
        $mform->addRule('mobile', 'enter numerics only', 'numeric');
        $mform->addRule('mobile', 'enter minimum 10 numbers', 'minlength', 10);

        $mform->addElement('textarea', 'address', get_string('address'), 'wrap="virtual" rows="10" cols="96"');
        $mform->addRule('address', 'address is required', 'required', 'alphanumeric', 'server', false, false);

        $this->add_action_buttons($cancel = true, $submitlabel="submit");
    }
}
 ?>
