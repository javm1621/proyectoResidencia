// $(document).ready(function(){
// 	var altura = $('#main-header').offset().top;
	
// 	$(window).on('scroll', function(){
// 		if ( $(window).scrollTop() > altura ){
// 			$('#main-header').addClass('menu-fixed');
// 		} else {
// 			$('#main-header').removeClass('menu-fixed');
// 		}
// 	});
 
// });

$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, php').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});