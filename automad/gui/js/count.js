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
 *	Copyright (c) 2016-2021 by Marc Anton Dahmen
 *	https://marcdahmen.de
 *
 *	Licensed under the MIT license.
 *	https://automad.org/license
 */


/*
 *	Count items matching a selector and replace the content of the element with the returned number. 
 */
	
+function(Automad, $) {
	
	Automad.count = {
		
		dataAttr: 'data-am-count',
		
		get: function(e) {
			
			var	c = Automad.count;
			
			$('[' + c.dataAttr + ']').each(function(){
			
				var	$counter = $(this),
					target = $counter.data(Automad.util.dataCamelCase(c.dataAttr));
				
				$counter.text($(target).length);
				
			});
			
		}, 
		
		init: function() {
			
			var	c = Automad.count,
				$doc = $(document);
				
			$doc.on('ready ajaxComplete count.automad', c.get);	
			
		}
		
	}
	
	Automad.count.init();
	
}(window.Automad = window.Automad || {}, jQuery);