$(document).ready(function(){
$('.sp').first().addClass('active');
$('.sp').hide();    
$('.active').show();

    $('#button-next').click(function(){

    $('.active').removeClass('active').addClass('oldActive');    
                   if ( $('.oldActive').is(':last-child')) {
        $('.sp').first().addClass('active');
        }
        else{
        $('.oldActive').next().addClass('active');
        }
    $('.oldActive').removeClass('oldActive');
    $('.sp').fadeOut();
    $('.active').fadeIn();
        
        
    });
    
       $('#button-previous').click(function(){
    $('.active').removeClass('active').addClass('oldActive');    
           if ( $('.oldActive').is(':first-child')) {
        $('.sp').last().addClass('active');
        }
           else{
    $('.oldActive').prev().addClass('active');
           }
    $('.oldActive').removeClass('oldActive');
    $('.sp').fadeOut();
    $('.active').fadeIn();
    });
    
    
    
   
});





function toggle(showHideDiv, toggle) {
	var ele = document.getElementById(showHideDiv);
	var text = document.getElementById(toggle);
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "restore";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "collapse";
	}
}