$(document).ready(function() {

/*----------------------------------------------------*/
/*	Sequence Slider
/*----------------------------------------------------*/
     
/*$(function(){
    var options = {
        nextButton: true,
        prevButton: true,
        pagination: true,
        animateStartingFrameIn: true,
        autoPlay: true,
        autoPlayDelay: 3000,
        preloader: true,
        preloadTheseFrames: [1],
    };
    
    var mySequence = $("#sequence").sequence(options).data("sequence");
});
/*----------------------------------------------------*/
/*	Portfolio Mixitup
/*----------------------------------------------------*/

/*$(function(){
         $('#Grid').mixitup({
                targetSelector: '.mix',
                filterSelector: '.filter',
                effects: ['fade','blur'],
                easing: 'smooth',

            });
});*/

    
/*----------------------------------------------------*/
/*	Flexisel Clientslider
/*----------------------------------------------------*/

$("#clientslider").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
});

/*----------------------------------------------------*/
/*	Sticky Nav
/*----------------------------------------------------*/

//$(window).load(function(){
 //     $("#menu").sticky({ topSpacing: 0 });
//});

/*----------------------------------------------------*/
/*	MagnificPopup
/*----------------------------------------------------*/

/*$(function(){
  $('.magnific-popup').magnificPopup({type:'image'});
});*/

/*----------------------------------------------------*/
/*	About Us BxSlider
/*----------------------------------------------------*/

$(function(){          
             $('.aboutus').bxSlider({
                 mode: 'horizontal',
                 slideMargin: 3,
                 auto:true
             });             
});


/*----------------------------------------------------*/
/*	Testemonials BxSlider
/*----------------------------------------------------*/

$(function(){            
             $('.testemonials').bxSlider({
                 mode: 'horizontal',
                 slideMargin: 3,
                 auto:true
             });             
});


/*----------------------------------------------------*/
/*	Portfolio Hover Overlay
/*----------------------------------------------------*/

$('.overlay').hover(
        function(){
            $(this).find('.caption').fadeIn(550); 
        },
        function(){
            $(this).find('.caption').fadeOut(550); 
        }
); 

/*----------------------------------------------------*/
/*	Color Switch Panel
/*----------------------------------------------------*/

$('.switch').click(function(){

        if($('.editor').css('left') == '-150px'){
            $('.editor').animate({
                left: '-2px'
            });
        }
        else{
            $('.editor').animate({
                left: '-150px'
            });
        }

});

/*----------------------------------------------------*/
/*	Change CSS ( Color Change )
/*----------------------------------------------------*/

$(function(){ 
	     $('#changecss').styleSwitcher();
});

/*----------------------------------------------------*/
/*	Back to the Top Button
/*----------------------------------------------------*/

$(function(){
    $(window).scroll(function() { 
        if ($(this).scrollTop() > 1200) {
            $("#top-bt:hidden").css('visibility','visible');   
            $("#top-bt:hidden").fadeIn('550');  
        } 
        else {     
            $("#top-bt:visible").fadeOut("550"); 
        }  
    });
});
    
});



//попап окно при клике на блок Наши работы, сертификаты.
$(document).ready(function() {
	$(".fancybox").fancybox();
});
		
//Слайдер на главной
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  mode: 'fade',
	  autoControls: true,
	   auto: true,
	   
	  captions: true
	});
});

$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear'
};
*/
 
$().UItoTop({ easingType: 'easeOutQuart' });
 
});			

//ползунок расчета доставки
// With JQuery
$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {
	//alert(slideEvt.value);
	var val_area_def_metr = $("#val_area_def_metr").val();
	$("#val_area_def").val(slideEvt.value + val_area_def_metr);
	var summ = slideEvt.value * 500;
	$("#ex6SliderVal").text(summ);
});

// Without JQuery
/*var slider = new Slider("#ex6");
slider.on("slide", function(slideEvt) {
	$("#ex6SliderVal").text(slideEvt.value);
});*/

//попап заказать звонок и 
$(document).ready(function() {
	$(".feedback_btn").click(function() {
	
		$("#modal_feedback").modal('show');
	  });
});

//вызов мастера
$(document).ready(function() {
	$(".call_master_btn").click(function() {
			//alert("123");
			//где myModal - id модального окна
			$("#modal_call_master").modal('show');
		  }); 
});	

//добавить отзыв
$(document).ready(function() {
	$(".add_review_btn").click(function() {
			//alert("123");
			//где myModal - id модального окна
			$("#modal_add_review").modal('show');
		  }); 
});  

//фиксированное меню
$(document).ready(function(){

        var $menu = $("#horizontal-multilevel-menu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });//scroll
    });  
	
//попап окно закрываем по клику по фону	
$(document).ready(function() {	  
	$("#modal_feedback").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	$("#modal_call_master").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	$("#modal_add_review").click( function(event){
      if( $(event.target).closest(".modal-dialog").length ) 
        return;
	 // alert("123");
	  $(".close").click();
      event.stopPropagation();
    });
	
	
	
}); 	



  