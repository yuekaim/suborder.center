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


namespace Automad\Core;

use Automad\GUI\User as User;

defined('AUTOMAD') or die('Direct access not permitted!');


/**
 *	The Sitemap class handles the generating process for a site's sitemap.xml.
 *
 *	@author Marc Anton Dahmen
 *	@copyright Copyright (c) 2014-2021 by Marc Anton Dahmen - https://marcdahmen.de
 *	@license MIT license - https://automad.org/license
 */

class Sitemap {
	
	
	/**
	 *	The constructor verifies, whether sitemap.xml can be written and initiates the generating process.
	 *	
	 *	@param array $collection 
	 */
	
	public function __construct($collection) {
		
		if (!User::get()) {

			$sitemap = AM_BASE_DIR . '/sitemap.xml';

			// If the base dir is writable without having a sitemap.xml or if sitemap.xml exists and is writable itself.
			if ((is_writable(AM_BASE_DIR) && !file_exists($sitemap)) || is_writable($sitemap)) {
				$this->generate($collection, $sitemap);
			} else {
				Debug::log('Permissions denied!');
			}

		}
	
	}
	
	
	/**
	 *	Generate the XML for the sitemap and write sitemap.xml.
	 *
	 *	@param array $collection
	 *	@param string $sitemap
	 */
	
	private function generate($collection, $sitemap) {
		
		if (!$base = AM_BASE_SITEMAP) {

			$protocol = 'http';
		
			if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
				$protocol = 'https';
			}

			$base = $protocol . '://' . $_SERVER['SERVER_NAME'] . AM_BASE_INDEX;

		}

		$xml =  '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . 
				'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
		
		foreach ($collection as $Page) {
			// Only include "real" URLs and not aliases.
			if (strpos($Page->url, '/') === 0) {
				$xml .= "<url><loc>{$base}{$Page->url}</loc></url>\n";
			}
		}
		
		$xml .= '</urlset>';
		
		if (FileSystem::write($sitemap, $xml)) {
			Debug::log($sitemap, 'Successfully generated');
		}
		
	}
	
	
}
