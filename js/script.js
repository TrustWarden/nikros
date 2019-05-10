jQuery(document).ready(function($){
	
	//for change sizing navbar brand on animation and navigation item
	var changeSize = true;
	$(window).scroll(function(){	
		if( $(this).scrollTop() > 150 && changeSize){
			$(".navbar-brand").stop().animate({fontSize: "1.5rem", color: "#111"}, 800);
			$(".navbar").stop().animate({backgroundColor: "#fff", color: "#111"}, 600);
			$(".nav-item").stop().animate({color: "#111"}, 600);
			//when hover navigation change color
			$(".nav-item").hover(function(e){
				 $(this).css("color",e.type === "mouseenter"?"#888":"#111") 
			});
			changeSize = false;
		}else if( $(this).scrollTop() < 150 && !changeSize ){
			$(".navbar-brand").stop().animate({fontSize: "2.3rem", color: "#fff"}, 800);
			$(".navbar").stop().animate({backgroundColor: "transparent", color: "#fff"}, 600);
			$(".nav-item").stop().animate({color: "#fff"}, 600);
			//when hover navigation change color
			$(".nav-item").hover(function(e){
				 $(this).css("color",e.type === "mouseenter"?"#888":"#fff"); 
			});
			changeSize = true;
		}
	});
	
	
	//set height for 404 page
	var windowHeight = $(window).height();
	$('.page-404').height(function(){
		$(this).css('height', windowHeight+'px');
	});
	
	
	// Add the following code if you want the name of the file appear on select input fule type
	$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
	
});