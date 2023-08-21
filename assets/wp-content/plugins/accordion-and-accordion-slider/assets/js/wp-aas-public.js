(function($) {

	"use strict";
	
	$( '.wpos-tab-slider' ).each(function( index ) {		
		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.wpaas-accordion-wrap').find('.wpaas-conf').text());
		
		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {	
	
			jQuery('#'+slider_id).wpostabSlider({
				width				: parseInt(slider_conf.width),
		        height 				: parseInt(slider_conf.height),
				responsiveMode		: 'custom',
		        orientation 		: slider_conf.orientation,
				openPanelOn 		: slider_conf.open_panel_on,				
		        visiblePanels 		: parseInt(slider_conf.visible_panels),
		        panelDistance 		: parseInt(slider_conf.panel_distance),
				maxOpenedPanelSize	: slider_conf.max_openedaccordion_size,				
				openPanelDuration	: 400,
				closePanelDuration	: 400,
				pageScrollDuration	: 300,
		        mouseWheel 			: (slider_conf.mouse_wheel) == "true" 			? true 			: false,		       
				autoplay 			: (slider_conf.autoplay) 	== "true" 			? true 			: false,	
				shadow				: (slider_conf.shadow) 		== "true" 			? true 			: false,				
				breakpoints: {
					960: {visiblePanels: (parseInt(slider_conf.visible_panels) > 5) ? 5 : parseInt(slider_conf.visible_panels)},
					800: {visiblePanels: (parseInt(slider_conf.visible_panels) > 3) ? 3 : parseInt(slider_conf.visible_panels)},
					650: {visiblePanels: 3},
					500: {visiblePanels: 3}
				}
	    	});
		}
	});
})(jQuery);