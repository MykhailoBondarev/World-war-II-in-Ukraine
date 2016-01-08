jQuery(document).ready(function(){
	jQuery('#content_masonry').masonry({
		columnWidth: 350,
      	itemSelector: '.masonry_item',
        singleMode: true,
      	isResizable: true,
      	isAnimated: true,
        animationOptions: { 
          queue: true, 
          duration: 500 
      }
    }); 
});



