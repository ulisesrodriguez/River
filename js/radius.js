/**
 * JavaScript Document
 *
 * Radius config files
 **/
 
curvyCorners.addEvent(window, 'load', initCorners);



  function initCorners() {

    var settings = {

      tl: { radius: 15 },

      tr: { radius: 15 },

      bl: { radius: 15 },

      br: { radius: 15 },

      antiAlias: true

    }
	
	var settingslogo = {

      tl: { radius: 30 },

      tr: { radius: 30 },

      bl: { radius: 30 },

      br: { radius: 30 },

      antiAlias: true

    }
	
	var settingsproduct = {

      tl: { radius: 0 },

      tr: { radius: 0 },

      bl: { radius: 30 },

      br: { radius: 30 },

      antiAlias: true

    }
	
		
   curvyCorners(settingslogo, "#logo");
   curvyCorners(settingslogo, "#bg-logo");
   
   curvyCorners(settings, "#bannerheader");
   curvyCorners(settings, "#secciontree");
   curvyCorners(settings, "#container-quienes");
   curvyCorners(settings, "#container-compras");
   
    curvyCorners(settingsproduct, "#producto-uno");
	curvyCorners(settingsproduct, "#producto-dos");
	curvyCorners(settingsproduct, "#producto-tres");
	curvyCorners(settingsproduct, "#producto-cuatro");

  } 
  
  