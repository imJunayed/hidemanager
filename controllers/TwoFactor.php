<?php
/**
 * Temporary Login Class
 * Called on Temporary Logins
 *
 * @file The Temporary Logins file
 * @package HMWP/Templogin
 * @since 7.0.0
 */

defined('ABSPATH') || die('Cheatin\' uh?');

class HMWP_Controllers_TwoFactor extends HMWP_Classes_FrontController
{

    private static $secret_key = null;

    public function hookInit() {

    }

    public function getTwoFactors(){
        return '';
    }

    public function action()
    {
        parent::action();

        //if current user can't manage settings
        if (!HMWP_Classes_Tools::userCan('hmwp_manage_settings') ) {
            return;
        }

        switch ( HMWP_Classes_Tools::getValue('action') ) {
            case 'hmwp_2fasettings':

            break;
        }
    }

}
