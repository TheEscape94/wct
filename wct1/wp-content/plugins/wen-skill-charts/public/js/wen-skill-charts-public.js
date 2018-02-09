function wen_skill_bar_animate(my_obj){
  if( 1 == jQuery( my_obj ).data('animated') ){
    return;
  }
  jQuery('.skill-bar-wrap', my_obj).each(function(){
    jQuery(this).find('.skill-bar').animate({
      width:jQuery(this).attr('data-percent')
    },2000, function(){
      //after animation is complete
      jQuery( my_obj ).data('animated','1');
    });
  });
} //end function

(function( $ ) {
	'use strict';


})( jQuery );
