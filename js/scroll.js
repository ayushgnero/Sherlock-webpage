<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript">

    jQuery(function($) {

      var doAnimations = function() {

        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');

        if ($animatables.length == 0) {
          $(window).off('scroll', doAnimations);
        }

        $animatables.each(function(i) {
           var $animatable = $(this);
          if (($animatable.offset().top + $animatable.height() - 20) < offset) {
            $animatable.removeClass('animatable').addClass('animated');
          }
        });

      };
      $(window).on('scroll', doAnimations);
      $(window).trigger('scroll');

    });
</script>
