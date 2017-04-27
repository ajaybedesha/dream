<!DOCTYPE html>
<html>
<head>
	<title>PAGE TITLE.</title>
	 <link rel="icon" href="<?=appDir::imagesFolder()?>DREEMER.JPG">
<link href="<?=appDir::cssFolder()?>b.css" type="text/css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
     $("#profile").click(function(){
        $(".super-menubar").slideToggle("slow");
        $("#create").toggleClass("white");
         $("#profile").toggleClass("white"); $('html, body').animate({
    scrollTop: $("body").offset().top + $("body").height()
}, 1000);
    });
});
$(document).ready(function(){
    $("#search").click(function(){
        $(".signup-menubar").slideToggle("slow");
        $("#search").toggleClass("white");
       $('html, body').animate({
    scrollTop: $("body").offset().top + $("body").height()
}, 1000);
    });
});
$(document).ready(function(){
    $(".home-button").click(function(){
        $(".notification-menubar").slideToggle("slow");
        $(".home-button").toggleClass("white")
    });
$(document).ready(function(){
	$("#logout").click(function(){
		window.confirm("Are you sure you want to log out of Dreemer?");

	});
});
$(document).ready(function(){
     $("#profile").click(function(){
        $(".user-info").slideToggle("slow");
        $(".portfolio").fadeOut("slow");
        $("#profile").toggleClass("white");
         $("#profile").toggleClass("white"); $('html, body').animate({
    scrollTop: $("body").offset().top + $("body").height()
}, 1000);
    });
});
$(document).ready(function(){
     $("#create").click(function(){
        $(".portfolio").slideToggle("slow");
         $(".user-info").fadeOut("slow");
        $("#create").toggleClass("white");
         $("#create").toggleClass("white"); 
         $('html, body').animate({
    scrollTop: $("body").offset().top + $("body").height()
},500);
    });
});


$(document).delegate('#col img','mouseover', function(){
	$(this).fadeTo(500,0.7);
		
	});
$(document).delegate('#col img', 'mouseout', function() {
   $(this).fadeTo(500, 1);
});
  
});
</script>