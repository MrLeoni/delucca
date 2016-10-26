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
  // Call the function
  mobileBtnClear();
  
  // Get current year
  function currentDate() {
    var date = new Date();
    $("#js-date").html(date.getFullYear());
  }
  currentDate();
  
  // Parallax Efect
  $('.parallax').each(function(){
  	var $obj = $(this);
  	$(window).scroll(function() {
  		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
  		var bgpos = '50% '+ yPos + 'px';
  		$obj.css('background-position', bgpos );
  	}); 
  });
  
});