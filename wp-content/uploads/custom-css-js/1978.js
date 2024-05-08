<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function(){
  // Open Lightbox
  jQuery('.open-lightbox').on('click', function(e) {
    e.preventDefault();
    var image = jQuery(this).attr('href');
    jQuery('html').addClass('no-scroll');
    jQuery('body').append('<div class="lightbox-opened"><img src="' + image + '"></div>');
  });
  
  // Close Lightbox
   jQuery('body').on('click', '.lightbox-opened', function() {
    jQuery('html').removeClass('no-scroll');
   jQuery('.lightbox-opened').remove();
  });
  
});</script>
<!-- end Simple Custom CSS and JS -->
