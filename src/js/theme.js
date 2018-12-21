jQuery(document).ready( function($) {
 
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
 
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
 
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });  

    // Rating stars
  
        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
          var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
         
          // Now highlight all the stars that's not after the current hovered star
          $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
              $(this).addClass('hover');
            }
            else {
              $(this).removeClass('hover');
            }
          });
          
        }).on('mouseout', function(){
          $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
          });
        });
        
        
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
          var onStar = parseInt($(this).data('value'), 10); // The star currently selected
          var stars = $(this).parent().children('li.star');
          
          for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
          }
          
          for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
          }

          var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
          $('#rate').val(ratingValue);
          
        });    

     
      

        /*
        -----------------------------------------
        language Change
        -----------------------------------------
        */

        $(".select").change(function () {
            console.log($(this).val())

          $.post("lang/choselang.php", {
              lang: $(this).val()
            })
            .done(function (data) {
              console.log(data);
              if (data) {
                window.location.reload()
              }
            });
        });



        /*
        -----------------------------------------
        Form Animations
        -----------------------------------------
        */
          //REVIEW
        $('#review-btn').on('click', function() {
          /*
          If any input is empty make it's border red and shake it. After the animation is complete, remove the shake and animated classes so that the animation can repeat.
          */
      
          // Check company input
          if ($('#review-company').val() === '') {
              $('#review-company').addClass('form-error animated shake')
                        .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                              $(this).removeClass('animated shake');
              });
          } else {
              $('#review-company').removeClass('form-error');
          }
      
          // Check email input
          if ($('#review-email').val() === '') {
              $('#review-email').addClass('form-error animated shake')
                         .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                              $(this).removeClass('animated shake');
              });
          } else {
              $('#review-email').removeClass('form-error');
          }

          // Check phone input
          if ($('#review-phone').val() === '') {
            $('#review-phone').addClass('form-error animated shake')
                        .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $(this).removeClass('animated shake');
            });
        } else {
            $('#review-phone').removeClass('form-error');
        }
      
      });

      // CONTACT
      $('#contact-btn').on('click', function() {
        /*
        If any input is empty make it's border red and shake it. After the animation is complete, remove the shake and animated classes so that the animation can repeat.
        */
    
        // Check company input
        if ($('#contact-name').val() === '') {
            $('#contact-name').addClass('form-error animated shake')
                      .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $(this).removeClass('animated shake');
            });
        } else {
            $('#contact-name').removeClass('form-error');
        }
    
        // Check email input
        if ($('#contact-email').val() === '') {
            $('#contact-email').addClass('form-error animated shake')
                       .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $(this).removeClass('animated shake');
            });
        } else {
            $('#contact-email').removeClass('form-error');
        }

        // Check phone input
        if ($('#contact-phone').val() === '') {
          $('#contact-phone').addClass('form-error animated shake')
                      .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                          $(this).removeClass('animated shake');
          });
      } else {
          $('#contact-phone').removeClass('form-error');
      }
    
        // Check message textarea
        if ($('#contact-message').val() === '') {
            $('#contact-message').addClass('form-error animated shake')
                         .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $(this).removeClass('animated shake');
            });
        } else {
            $('#contact-message').removeClass('form-error');
        }
    });

    $('.nav__cta-lang').on('click', function(){
        // console.log($('#lang_header'));
        
        $('#lang_header').open();
    })

    

      
});