
jQuery(document).ready(function($){

	jQuery(".ImgLiquid").imgLiquid({
	    fill: true,
	    horizontalAlign: "center",
	    verticalAlign: "50%"
	});
	 //Parallax 
	function effectParallax() {
	    //This variable is storing the distance scrolled
	    var scrolled = $(window).scrollTop() + 1;

	    //Every element with the class "scroll" will have parallax background 
	    //Change the "0.3" for adjusting scroll speed.
	    $('.parallaxEffect').css('background-position', '0' + -(scrolled * 0.1) + 'px');
	}
	//Everytime we scroll, it will fire the function
	$(window).scroll(function (e) {
	    effectParallax();
	});
    
});
