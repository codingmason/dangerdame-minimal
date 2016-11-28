$(function(){
      $('.nav-bar-icon').on('click',function(e){
        e.preventDefault();
        if($('.nav-bar-icon').hasClass('show')){
          $( ".panel" ).animate({left: "-110%"}, 600);
          
          $(this).removeClass('show');
        }else{
          $( ".panel" ).animate({left: "0"}, 600);
          $(this).addClass('show');
        }
      });
    });