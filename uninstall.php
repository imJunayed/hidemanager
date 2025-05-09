<?php
/**
 * HMWP plugin file.
 *
 * @package HMWP\Uninstall
 */

/**
 * Called on plugin uninstall
 */
if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

/* Call config files */
require dirname(__FILE__) . '/index.php';

//Uninstall the temporary logins on plguin uninstall
HMWP_Classes_ObjController::getClass('HMWP_Classes_Tools');
if(HMWP_Classes_Tools::getOption('hmwp_templogin_delete_uninstal')){
    HMWP_Classes_ObjController::getClass('HMWP_Models_Templogin')->deleteTempLogins();
}

/* Delete the record from database */
delete_option(HMWP_OPTION);
delete_option(HMWP_OPTION_SAFE);
delete_option(HMWP_SECURITY_CHECK);
delete_option(HMWP_SECURITY_CHECK_IGNORE);
delete_option(HMWP_SECURITY_CHECK_TIME);
wp_clear_scheduled_hook(HMWP_CRON);
