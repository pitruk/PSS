 $(document).ready(function(){
	  
	  $(window).scroll(function(){

		if($(window).scrollTop()>100){
		  $('nav').addClass('navcolor');
		}else{
		  $('nav').removeClass('navcolor');
		}

	  });

 });
 
 