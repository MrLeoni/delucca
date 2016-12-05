$(document).ready(function() {
  
  /*--------------------------------
  // Mobile navigation engine
  --------------------------------*/
  
  // Toggle class ".active" in "#js-mobile-btn" and in ".header-wrapper"
  $("#js-mobile-btn").click(function() {
    
    // Toggle class in #js-mobile-btn
    $(this).toggleClass("active");
    
    // Creating a boolean variable to check if #js-mobile-btn has or not the "active" class
    var btnHasClass = $(this).hasClass("active");
    // Store .header-wrapper in a variable
    var nav = $(".header-wrapper");
    
    if (btnHasClass) {
      // If #js-mobile-nav is active, give .header-wrapper a class of "active"
      nav.addClass("active");
    } else {
      // If is not active, remove "active" class
      nav.removeClass("active");
    }
    
  });
  
  // When we are logged in WordPress Admin area increase "top" property
  // value of "#js-mobile-btn" to clear the administration menu of WordPress
  function mobileBtnClear() {
    // Find WordPress menu
    var wpMenu = $("body").find("#wpadminbar");
    
    // Storage .mobile-btn-box
    var mobileBtn = $(".mobile-btn-box");
    
    if(wpMenu.length > 0) {
      // If has WordPress menu, change "top" property
      // of mobileBtn to "61px"
      mobileBtn.css("top", "61px");
    } else {
      // If WordPress menu don't exist set "top" property
      // to "20px"
      mobileBtn.css("top", "20px");
    }
  }
  // Call function
  mobileBtnClear();
  
  /*--------------------------------
  // Footer date
  --------------------------------*/
  
  function currentDate() {
    var date = new Date();
    $("#js-date").html(date.getFullYear());
  }
  currentDate();
  
  /*--------------------------------
  // Parallax Effect
  --------------------------------*/
  
  $.fn.parallax = function(strength) {
    var scroll_top = $(window).scrollTop();
    var move_value = Math.round(scroll_top * strength);
    this.css('background-position', 'center -'+ move_value +'px');
	};
	
	$(window).on('scroll', function() {
		if($(this).width() > 991) {
    	$('.parallax').parallax(0.2);
		}
	});
  
  /*--------------------------------
  // Posts filter engine
  --------------------------------*/
  $("li[data-filter]").click(function() {
    // Get value of the clicked li item, and use it to target the posts
    var filterClicked = $(this).attr("data-filter");
    
    // Elements that haven't been clicked
    var itensExcluded = $(".post-wrapper").not("[data-category='"+filterClicked+"']");
    
    // Elements that have benn clicked
    var itemClicked = $(".post-wrapper[data-category='"+filterClicked+"']");
    
    // Hiding elements
  	itensExcluded.hide("fast");
  	
  	// Show elements
  	itemClicked.show("fast");
  });
  
  // Show all posts
  $(".show-all").click(function() {
  	// Display all posts
    $(".post-wrapper").show("fast");
  });
  
  // Change color of the li item on hover and when it is clicked
  function toggleFeedbackClass() {
    var item = $(".cat-filter li");
    item.click(function() {
      item.not(this).removeClass("active");
      $(this).addClass("active");
    });
  }
  // Call function
  toggleFeedbackClass();
  
  /*--------------------------------
  // Clientes Slider
  --------------------------------*/
  
  $(".client-slider").bxSlider({
    pager: false,
    slideWidth: 150,
    minSlides: 2,
    maxSlides: 5,
    moveSlides: 1,
    slideMargin: 30
  });
  
});