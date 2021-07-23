<?php 
/*
 *	                  ....
 *	                .:   '':.
 *	                ::::     ':..
 *	                ::.         ''..
 *	     .:'.. ..':.:::'    . :.   '':.
 *	    :.   ''     ''     '. ::::.. ..:
 *	    ::::.        ..':.. .''':::::  .
 *	    :::::::..    '..::::  :. ::::  :
 *	    ::'':::::::.    ':::.'':.::::  :
 *	    :..   ''::::::....':     ''::  :
 *	    :::::.    ':::::   :     .. '' .
 *	 .''::::::::... ':::.''   ..''  :.''''.
 *	 :..:::'':::::  :::::...:''        :..:
 *	 ::::::. '::::  ::::::::  ..::        .
 *	 ::::::::.::::  ::::::::  :'':.::   .''
 *	 ::: '::::::::.' '':::::  :.' '':  :
 *	 :::   :::::::::..' ::::  ::...'   .
 *	 :::  .::::::::::   ::::  ::::  .:'
 *	  '::'  '':::::::   ::::  : ::  :
 *	            '::::   ::::  :''  .:
 *	             ::::   ::::    ..''
 *	             :::: ..:::: .:''
 *	               ''''  '''''
 *	
 *
 *	AUTOMAD
 *
 *	Copyright (c) 2014-2021 by Marc Anton Dahmen
 *	https://marcdahmen.de
 *
 *	Licensed under the MIT license.
 *	https://automad.org/license
 */


namespace Automad\GUI;
use Automad\Core as Core;


defined('AUTOMAD') or die('Direct access not permitted!');


$versionSanitized = Core\Str::sanitize(AM_VERSION);

?>
<!DOCTYPE html>
<html lang="en" class="am-dashboard">
<head>
	  
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title><?php echo $this->guiTitle; ?></title>
	
	<link href="<?php echo AM_BASE_URL; ?>/automad/gui/dist/favicon.ico?v=<?php echo $versionSanitized; ?>" rel="shortcut icon" type="image/x-icon" />
	<link href="<?php echo AM_BASE_URL; ?>/automad/gui/dist/libs.min.css?v=<?php echo $versionSanitized; ?>" rel="stylesheet">
	<link href="<?php echo AM_BASE_URL; ?>/automad/gui/dist/automad.min.css?v=<?php echo $versionSanitized; ?>" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo AM_BASE_URL; ?>/automad/gui/dist/libs.min.js?v=<?php echo $versionSanitized; ?>"></script>	
	<script type="text/javascript" src="<?php echo AM_BASE_URL; ?>/automad/gui/dist/automad.min.js?v=<?php echo $versionSanitized; ?>"></script>
	
	<?php 
		echo Components\Header\BlockSnippetArrays::render(); 
		echo Components\Header\EditorTextModules::render(); 
	?>

</head>


<body>
	
	<?php 
	
	$this->element('navbar'); 
	$this->element('sidebar'); 
	
	?>
		
	<div class="<?php if (User::get()) { ?>am-sidebar-push <?php } ?>am-navbar-push uk-container uk-container-center">
	