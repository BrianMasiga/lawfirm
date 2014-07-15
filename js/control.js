(function($){
    $.fn.TouchMenu = function(options) {

        var selector = $(this);
         
        var defaults = {
                scrollbar_theme : 'dark-thin',       //scrollbar theme
                menu_top : 2,                        //Menu Offset From Top
                slide_speed : 500,                    //scroll down speed
                menu_theme: '',
                menu_shadow: false,
                menu_height: 45
          },
          settings = $.extend({}, defaults, options);

          var red_li_width = selector.find("ul li").outerWidth();
          var red_width = selector.find("ul").outerWidth();
         
          
          selector.mCustomScrollbar({
                                    horizontalScroll:true, 
                                    autoHideScrollbar: false,
                                    contentTouchScroll: true,
                                    theme: settings.scrollbar_theme,
                                    callbacks:{
                                      onScroll: function(){
                                                      $('#temp_red_menu_item').hide();
                                                    },
                                      onScrollStart: function(){
                                                      $('#temp_red_menu_item').hide();
                                                    }                
                                    }
          });




          selector.css("margin", 0).css("padding", 0).css("height", settings.menu_height + "px").css("width", "100%");
          selector.find('.red_menu_inner').addClass(settings.menu_theme);

          selector.find('.red_menu_inner > ul > li > ul > li > ul').each(function(){
               $(this).closest('li').addClass("sub_2");
          });

          selector.find('.red_menu_inner > ul > li > ul').closest('li').addClass("red_drop_down");

          selector.find(".red_menu_inner > ul > li > ul").css("width", settings.menu_width);
              
          

          var temp_width = 0;

          var window_width = $(window).width();
          var mobile_device = false;

          if( window_width <= 720 ) {
              mobile_device = true;
              
          } 


          if( /Android|AppleWebKit|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
              mobile_device = true;
          }



          var sub_menu1 =  selector.find(".red_menu_inner > ul > li:first-child");
          var sub_menu_left = Math.round( selector.offset().left );
          var temp_menu_visible = 0;


          $(window).resize(function(){

              //sub_menu1 =  selector.find(".red_menu_inner > ul > li:first-child");
              sub_menu_left = Math.round( selector.offset().left );

              if( $(window).width() <= 720){
                mobile_device = true;

              }else{
                mobile_device = false;
              }

          });


          
                  selector.find('.red_menu_inner > ul > li').on('mouseover touchstart',function(e) {
                            
                            var mobile_left = sub_menu_left;
                            sub_menu_left = sub_menu1.offset().left;

                            var menu_link = $(this).children('a');
                            
                            var sub_menu = $(this).children('ul') ;
                            var temp_left = Math.round( $(this).offset().left );  

                            var temp_top = Math.round( $(this).offset().top ); 
                            var temp_bottom = temp_top + settings.menu_top;

                            if( temp_menu_visible == 0 && $(this).find('ul').length > 0 ){
                              $('#temp_red_menu_item').remove();
                              if(mobile_device == false){
                                $('body').append("<div class='red_menu_inner "+settings.menu_theme+"' id='temp_red_menu_item' style='display:block;position:absolute;left:"+ temp_left +"px"+";top:"+temp_bottom + "px" +"'><ul><li><ul id='red_fake_sub_menu' style='display:block'>" + sub_menu.html() + "</ul></li></ul></div>");
                              }else{

                                mobile_left =  Math.round( selector.offset().left );
                                $('body').append("<div class='red_menu_inner "+settings.menu_theme+"' id='temp_red_menu_item' style='display:block;position:absolute;left:"+ mobile_left +"px;"+"top:"+ parseInt(temp_bottom + 6) + "px" + "'> <ul><li><ul id='red_fake_sub_menu' style='display:block;left:0;'>" + "<li id='red_menu_heading'><a href='"+menu_link.attr('href')+"'>"+menu_link.html()+"</a></li>" + sub_menu.html() + "</ul></li></ul></div>");
                                
                                $('#temp_red_menu_item').find('.sub_2').each(function(index){
                                    var temp_inner_link = $(this).children('a');
                                    $(this).addClass("red_temp_mobile");  
                                    $(this).children("ul").prepend("<li class='red_menu_heading'><a href='"+temp_inner_link.attr("href")+"'>"+temp_inner_link.html()+"</a></li>");
                                    temp_inner_link.attr("href", "#");
                                });

                                $('.red_menu_inner > ul > li > ul').css( "width", selector.width()  );
                                //$('.red_menu_inner > ul > li > ul').css("left", sub_menu_left);

                              }
                            }


                                      if(settings.menu_shadow){
                                        $('#temp_red_menu_item').addClass('red_menu_shadow_effect');
                                      }

                           // temp_menu_visible = 1;
                            
                  });
         

          selector.find('.red_menu_inner > ul > li.red_drop_down').on('click', function(e) {

                      

                        if(mobile_device == true){
                            e.preventDefault();
                            if( $('#temp_red_menu_item').is(':visible') == false ){

                              //$(this).trigger("hover"); 

                            }else{
                              //$('#temp_red_menu_item').hide();
                              temp_menu_visible = 0;
                            }

                      }
                        

          }); 


          var temp_sub_menu_hover = 0;
          
          $('body').on('click touchend', function (e) {

              if( $(e.target).closest(".red_menu_inner").length == 0 ) {
                  $('#temp_red_menu_item').hide();
                  temp_menu_visible = 0;  
                  
              } 
                
          });
          

          
          $('body').on("click",".red_temp_mobile > a", function(e){
            if(mobile_device == true){
                e.preventDefault();

                $('.red_temp_mobile').children("ul").stop().slideUp(settings.slide_speed);
                $(this).siblings("ul").stop().slideDown(settings.slide_speed);
            }
          });
          
         
    }//end of plugin
})(jQuery);//end