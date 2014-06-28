<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  $paypal_menu = array(
    array('code' => 'paypal.php',
          'title' => MODULES_ADMIN_MENU_PAYPAL_START,
          'link' => tep_href_link('paypal.php'))
  );

  $paypal_menu_check = array('OSCOM_APP_PAYPAL_LIVE_SELLER_EMAIL',
                             'OSCOM_APP_PAYPAL_LIVE_API_USERNAME',
                             'OSCOM_APP_PAYPAL_SANDBOX_SELLER_EMAIL',
                             'OSCOM_APP_PAYPAL_SANDBOX_API_USERNAME');

  foreach ( $paypal_menu_check as $value ) {
    if ( defined($value) && tep_not_null(constant($value)) ) {
      $paypal_menu[] = array('code' => 'paypal.php',
                             'title' => MODULES_ADMIN_MENU_PAYPAL_BALANCE,
                             'link' => tep_href_link('paypal.php', 'action=balance'));

      $paypal_menu[] = array('code' => 'paypal.php',
                             'title' => MODULES_ADMIN_MENU_PAYPAL_CONFIGURE,
                             'link' => tep_href_link('paypal.php', 'action=configure'));

      $paypal_menu[] = array('code' => 'paypal.php',
                             'title' => MODULES_ADMIN_MENU_PAYPAL_MANAGE_API,
                             'link' => tep_href_link('paypal.php', 'action=credentialsManual'));

      $paypal_menu[] = array('code' => 'paypal.php',
                             'title' => MODULES_ADMIN_MENU_PAYPAL_LOG,
                             'link' => tep_href_link('paypal.php', 'action=log'));

      break;
    }
  }

  $cl_box_groups[] = array('heading' => MODULES_ADMIN_MENU_PAYPAL_HEADING,
                           'apps' => $paypal_menu);

  unset($paypal_menu);
  unset($paypal_menu_check);
  unset($value);
?>
