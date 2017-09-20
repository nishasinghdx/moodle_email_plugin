<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Settings configuration for admin setting section
 * @package    theme_academi
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @author    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;
$settings = new admin_settingpage( 'local_email', 'email plugin' );
$ADMIN->add( 'localplugins', $settings );

  $settings->add( new admin_setting_configtext(

  		// This is the reference you will use to your configuration
  		'select_emails',

  		// This is the friendly title for the config, which will be displayed
  		'select emails'
  	) );



    // //selectemail setting
    // //  $temp = new admin_settingpage('local_email_selectemail', get_string('selectemail', 'local_email'));
    // $temp = new admin_settingpage('local_email','selectemail');
    //    //email title setting
    //    $name = 'local_email/selectemail';
    //    $title ='selectemail';
    //    $description = "gjh";
    //    $default = "yj";
    //    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    //    //$setting->set_updatedcallback('theme_reset_all_caches');
    //    $temp->add($setting);
    //    $settings->add($temp);
 ?>
