<?php
defined('MOODLE_INTERNAL') || die;
$capabilities = array(
    'local/email:viewpage' => array(
        'riskbitmask' => RISK_SPAM,
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'manager' => CAP_ALLOW
        )
    ),
 );
 ?>
