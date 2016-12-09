/*!
 * main v1.0.0 (http://agenciadelucca.com.br)
 */
jQuery(document).ready(function() {
	
	
	
	
  
  /*--------------------------------
  // Mobile navigation engine
  --------------------------------*/
  
  // Toggle class ".active" in "#js-mobile-btn" and in ".header-wrapper"
  jQuery("#js-mobile-btn").click(function() {
    
    // Toggle class in #js-mobile-btn
    jQuery(this).toggleClass("active");
    
    // Creating a boolean variable to check if #js-mobile-btn has or not the "active" class
    var btnHasClass = jQuery(this).hasClass("active");
    // Store .main-nav in a variable
    var nav = jQuery(".main-nav");
    
    if (btnHasClass) {
      // If #js-mobile-nav is active, give .header-wrapper a class of "active"
      nav.slideDown(200, function() {
      	nav.animate({opacity: "1"}, 200);
      });
    } else {
      // If is not active, remove "active" class
      nav.animate({opacity: "0"}, 200, function() {
      	nav.slideUp(200);
      });
    } 
    
  });
  
  // Scroll effect
  // making navigation more thin when hit a certain point of the page
  jQuery(window).scroll(function() {
  	
  	// element that will be change
  	var element = jQuery('.header-wrapper');
  	// position of this element
  	var position = element.offset();
  	// size of the screen
  	var deviceWidth = jQuery(this).width();
  	// calculate 20% of the screen width
  	var b = (deviceWidth * 20) / 100;
  	
  	// if it's a mobile device, don't apply this effect
  	if(deviceWidth > 768) {
  		
  		// compare top position of the element with de result of 20% of screen width
  		// when the position of the element pass this point (20% o screen width), apply
  		// the animation. Wich is controlling via CSS
	  	if (position.top >= b) {
	  		
	  		element.css("padding", "0.5% 0 0");
	  	
	  	// reverse the effect when scrolled up
	  	} else {
	  		
	  		element.css("padding", '1% 0');
	  		
	  	}
	  	
  	}
  	
  });
  
  // If user is logged in clear the #header of the wp admin bar
  function loggedIn() {
  	var adminBar = jQuery('#wpadminbar').length;
  	var windowWidth = jQuery(window).width();
  	
  	if(windowWidth > 460 ) {
	  	if( adminBar === 1) {
	  		jQuery('#header').css('top', '30px');
	  	}
  	}
  	
  }
  loggedIn();
  
  // clearHeader(selector, target)
  // Get height and background-color of an element
  // and apply these values in another element
  // builded for clean the page from the fixed header
  function clearHeader(selector, target) {
  	var value = selector.css(['height', 'background-color']);
  	
  	target.css({
  		'height': value['height'],
  		'background-color': value['background-color'],
  	});
  }
  // apply function in '.clear-header' with parameters from '.header-wrapper'
  clearHeader(jQuery('.header-wrapper'), jQuery('.clear-header'));
  
  
  
  
  
  /*--------------------------------
  // Footer date
  --------------------------------*/
  
  function currentDate() {
    var date = new Date();
    jQuery("#js-date").html(date.getFullYear());
  }
  currentDate();
  
  
  
  
  
  /*--------------------------------
  // Parallax Effect
  --------------------------------*/
  
  jQuery.fn.parallax = function(strength) {
    var scroll_top = jQuery(window).scrollTop();
    var move_value = Math.round(scroll_top * strength);
    this.css('background-position', 'center -'+ move_value +'px');
	};
	
	jQuery.fn.aboutParallax = function(strength) {
    var scroll_top = jQuery(window).scrollTop();
    var move_value = (Math.round(scroll_top * strength)) - 190;
    this.css('background-position', 'center '+ move_value +'px');
	};
	
	jQuery(window).on('scroll', function() {
		if(jQuery(this).width() > 991) {
    	jQuery('.parallax').parallax(0.2);
    	jQuery('.about-footer.parallax').aboutParallax(0.2);
		}
	});
	
	
	
	
	
  /*--------------------------------
  // Posts filter engine
  --------------------------------*/
  jQuery("li[data-filter]").click(function() {
    // Get value of the clicked li item, and use it to target the posts
    var filterClicked = jQuery(this).attr("data-filter");
    
    // Elements that haven't been clicked
    var itensExcluded = jQuery(".post-wrapper").not("[data-category='"+filterClicked+"']");
    
    // Elements that have benn clicked
    var itemClicked = jQuery(".post-wrapper[data-category='"+filterClicked+"']");
    
    // Hiding elements
  	itensExcluded.hide("fast");
  	
  	// Show elements
  	itemClicked.show("fast");
  });
  
  // Show all posts
  jQuery(".show-all").click(function() {
  	// Display all posts
    jQuery(".post-wrapper").show("fast");
  });
  
  // Change color of the li item on hover and when it is clicked
  function toggleFeedbackClass() {
    var item = jQuery(".cat-filter li");
    item.click(function() {
      item.not(this).removeClass("active");
      jQuery(this).addClass("active");
    });
  }
  // Call function
  toggleFeedbackClass();
  
  
  
  
  
  /*--------------------------------
  // Clientes Slider
  --------------------------------*/
  
  jQuery(".client-slider").bxSlider({
    pager: false,
    speed: 600,
    slideWidth: 150,
    minSlides: 3,
    maxSlides: 6,
    moveSlides: 1,
    slideMargin: 10
  });
  
});