//попап окно при клике на блок Наши работы, сертификаты.
$(document).ready(function() {
	$(".fancybox").fancybox();
});
		
//Слайдер на главной
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  mode: 'fade',
	  autoControls: false,
	   auto: true,
	   autoHover: false,
	  captions: false
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
	
$(document).ready(function() {
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
  $(".zakaz_product_btn").click(function() {
	//alert("123");
	//где myModal - id модального окна
	var product = $(this).attr('p_product');
	//alert(product);
	$("#msg_product").text(product);
	$("#modal_feedback").modal('show');
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

     /*   var $menu = $(".header_bg");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });*/
		
		//scroll
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



  