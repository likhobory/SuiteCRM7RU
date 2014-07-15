<?php 
 //WARNING: The contents of this file are auto-generated



$admin_option_defs=array();
$admin_option_defs['Administration']['reschedule']= array('Calls_Reschedule','LBL_RESCHEDULE_ADMIN','LBL_RESCHEDULE_ADMIN_DESC','./index.php?module=Administration&action=Reschedule_admin');

if (isset($admin_group_header['sagility']))  $admin_option_defs['Administration'] = array_merge((array)$admin_option_defs['Administration'], (array)$admin_group_header['sagility'][3]['Administration']);

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);





/**
 *
 * @package Advanced OpenDiscovery
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */
$admin_option_defs = array();
$admin_option_defs['Administration']['aod'] = array(
    'edit',
    'LBL_AOD_SETTINGS',
    'LBL_AOD_DESC',
    './index.php?module=Administration&action=AODAdmin'
);
if (isset($admin_group_header['sagility']))  $admin_option_defs['Administration'] = array_merge((array)$admin_option_defs['Administration'], (array)$admin_group_header['sagility'][3]['Administration']);

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);



/**
 *  SugarCRM 7 Admin Link Notes
 * 
 *  http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/
 *      Sugar_Developer_Guide_7.0/50_Extension_Framework/Extensions/Administration
 *  
 *  $admin_option_defs = array();
 *  $admin_option_defs['Administration']['Section_Key'] = array(
 *      'Administration', // Icon name. Available icons in ./themes/default/images
 *      'LBL_LINK_NAME', //Link name label
 *      'LBL_LINK_DESCRIPTION', //Link description label
 *      'index.php?module=tag_Tags&action=Settings' //Link URL
 *  );
 * 
 *  $admin_group_header[] = array(
 *      'LBL_SECTION_HEADER', //Section header label
 *      '', //$other_text parameter for get_form_header()
 *      false, //$show_help parameter for get_form_header()
 *      $admin_option_defs, //Section links
 *      'LBL_SECTION_DESCRIPTION' //Section description label
 *  );
 * 
 */


$admin_option_defs = array();

// $admin_option_defs['Panel_Key']['Section_Key']

$admin_option_defs['jjwg_Maps']['config'] = array(
    'Administration', 
    'LBL_JJWG_MAPS_ADMIN_CONFIG_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_CONFIG_DESC', 
    './index.php?module=jjwg_Maps&action=config'
    );
$admin_option_defs['jjwg_Maps']['geocoded_counts'] = array(
    'Contacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODED_COUNTS_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODED_COUNTS_DESC', 
    './index.php?module=jjwg_Maps&action=geocoded_counts'
);
$admin_option_defs['jjwg_Maps']['geocoding_test'] = array(
    'CreateContacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODING_TEST_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODING_TEST_DESC', 
    './index.php?module=jjwg_Maps&action=geocoding_test'
);
$admin_option_defs['jjwg_Maps']['geocode_addresses'] = array(
    'CreateContacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODE_ADDRESSES_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODE_ADDRESSES_DESC', 
    './index.php?module=jjwg_Maps&action=geocode_addresses'
);
$admin_option_defs['jjwg_Maps']['donate'] = array(
    'Opportunities', 
    'LBL_JJWG_MAPS_ADMIN_DONATE_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_DONATE_DESC', 
    './index.php?module=jjwg_Maps&action=donate'
);
$admin_option_defs['jjwg_Maps']['address_cache'] = array(
    'Contacts', 
    'LBL_JJWG_MAPS_ADMIN_ADDRESS_CACHE_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_ADDRESS_CACHE_DESC', 
    './index.php?module=jjwg_Address_Cache&action=index'
);


$admin_group_header[]= array(
    'LBL_JJWG_MAPS_ADMIN_HEADER', 
    '', 
    false, 
    $admin_option_defs, 
    'LBL_JJWG_MAPS_ADMIN_DESC'
);



$admin_option_defs = array();
$admin_option_defs['Administration']['aos'] = array(
    'edit',
    'LBL_AOS_SETTINGS',
    'LBL_CHANGE_SETTINGS',
    './index.php?module=Administration&action=AOSAdmin'
);

if (isset($admin_group_header['sagility']))  $admin_option_defs['Administration'] = array_merge((array)$admin_option_defs['Administration'], (array)$admin_group_header['sagility'][3]['Administration']);

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);


/**
 *
 * @package Advanced OpenPortal
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */
$admin_option_defs = array();
$admin_option_defs['Administration']['aop'] = array(
    'edit',
    'LBL_AOP_SETTINGS',
    'LBL_AOP_DESC',
    './index.php?module=Administration&action=AOPAdmin'
);
if (isset($admin_group_header['sagility']))  $admin_option_defs['Administration'] = array_merge((array)$admin_option_defs['Administration'], (array)$admin_group_header['sagility'][3]['Administration']);

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);



$admin_option_defs=array();
$admin_option_defs['Administration']['securitygroup_management']= array('SecurityGroups','LBL_MANAGE_SECURITYGROUPS_TITLE','LBL_MANAGE_SECURITYGROUPS','./index.php?module=SecurityGroups&action=index');
$admin_option_defs['Administration']['securitygroup_config']= array('SecurityGroups','LBL_CONFIG_SECURITYGROUPS_TITLE','LBL_CONFIG_SECURITYGROUPS','./index.php?module=SecurityGroups&action=config');

$admin_option_defs['Administration'] = array_merge((array)$admin_group_header[0][3]['Administration'], (array)$admin_option_defs['Administration']);


$admin_group_header[0]= array('LBL_USERS_TITLE','',false,array_merge((array)$admin_group_header[0][3], (array)$admin_option_defs), 'LBL_USERS_DESC');



/*********************************************************************************
 * This file is part of QuickCRM Mobile CE.
 * QuickCRM Mobile CE is a mobile client for SugarCRM
 *
 * Author : NS-Team (http://www.ns-team.fr)
 *
 * QuickCRM Mobile CE is licensed under GNU General Public License v3 (GPLv3)
 *
 * You can contact NS-Team at NS-Team - 55 Chemin de Mervilla - 31320 Auzeville - France
 * or via email at infos@ns-team.fr
 *
 ********************************************************************************/

$admin_option_defs=array();
$admin_option_defs['Administration']['quickcrm_update']= array('Administration','LBL_UPDATE_QUICKCRM_TITLE','LBL_UPDATE_QUICKCRM','./index.php?module=Administration&action=updatequickcrm');


$admin_option_defs['Administration'] = array_merge((array)$admin_group_header[1][3]['Administration'],(array)$admin_option_defs['Administration']);

$admin_group_header[1]= array('LBL_ADMINISTRATION_HOME_TITLE','',false,$admin_option_defs, 'LBL_ADMINISTRATION_HOME_DESC');





$admin_option_defs = array();
$admin_option_defs['Administration']['colourselector'] = array(
    'themeadmin',
    'LBL_COLOUR_SETTINGS',
    'LBL_COLOUR_DESC',
    './index.php?module=Administration&action=colourAdmin'
);

if (isset($admin_group_header['sagility']))  $admin_option_defs['Administration'] = array_merge((array)$admin_option_defs['Administration'], (array)$admin_group_header['sagility'][3]['Administration']);

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);

?>