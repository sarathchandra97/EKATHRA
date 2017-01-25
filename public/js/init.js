(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('select').material_select();
    $(".close").click(function(){
	    $(".errors").close();
	    $(".success").close();
	});
  }); // end of document ready
})(jQuery); // end of jQuery name space
