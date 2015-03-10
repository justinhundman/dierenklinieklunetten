 jQuery(document).ready(function($) {
   $('.gfield_price').hide();
   $('.gfield.gsection').show();

   $('.gsection').click(function(evt) {
     //	 $('.gfield_price').hide();

     var current = $(evt.currentTarget).nextAll('li');
     var done = false;
     current.each(function() {
       if (done) {
         return;
       }

       if ($(this).hasClass('gsection')) {
         done = true;
       } else {
         $(this).toggle();
       }
     })
   });

 });
