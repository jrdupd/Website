<?php
/**
* @Copyright Copyright (C) 2010- DSTechCafe.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @version 1.1
* @module Stop Copy
**/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$stopcopypaste = modStopCopy::getStopCopy( $params );
require( JModuleHelper::getLayoutPath( 'mod_stopcopy' ) );
?>