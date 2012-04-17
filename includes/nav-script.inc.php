<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script src="js/jquery.scrollparallax.js" type="text/javascript"></script>
<script src="js/jquery.inview.js" type="text/javascript"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
 
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});

</script>

<!--[if !IE]>-->
<script type="text/javascript">
$(function(){
	/* main background image. moves against the direction of scroll*/
	$('#start-page').scrollParallax({
		'speed': -0.2
	});

	/* inner items, moves slightly faster than the background */

	/* two additional samples inside item2, both moving with direction of scroll*/


	/* speakers */

	
	/* left circles */
	$('.lwc-1').scrollParallax({
		'speed': -0.5
	});
  $('.lwc-2').scrollParallax({
		'speed': 0.5
	});
	$('.lwc-3').scrollParallax({
		'speed': -0.4
	});
  $('.lbc-1').scrollParallax({
		'speed': 0.4
	});	
	$('.lbc-2').scrollParallax({
		'speed': -0.4
	});	
  $('.lbc-3').scrollParallax({
		'speed': -0.4
	});	
  $('.lbc-4').scrollParallax({
		'speed': 0.3
	});	
	$('.lbc-5').scrollParallax({
		'speed': -0.4
	});	
	$('.double-circle-1').scrollParallax({
		'speed': 0.3
	})
  $('.double-circle-2').scrollParallax({
		'speed': 0.5
	});
	
	
	/* right circles */
	$('.rwc-1').scrollParallax({
		'speed': -0.4
	});
	$('.rwc-3').scrollParallax({
		'speed': 0.3
	})
	$('.rwc-4').scrollParallax({
		'speed': -0.5
	})
	$('.rwc-5').scrollParallax({
		'speed': -0.4
	})
	$('.rwc-6').scrollParallax({
		'speed': 0.2
	})
	$('.rbc-1').scrollParallax({
		'speed': 0.1
	})
	$('.rbc-2').scrollParallax({
		'speed': 0.4
	})
	$('.rbc-3').scrollParallax({
		'speed': -0.4
	})
	$('.sponsors-circle').scrollParallax({
		'speed': 0
	})
	$('.blockquote-circle').scrollParallax({
		'speed': -0.1
	})
	
});
</script>
<!--<![endif]-->
 
<script type="text/javascript">
/*
Firefox super responsive scroll (c) Keith Clark - MIT Licensed
*/
(function(doc) {

  var root = doc.documentElement;

  // Not ideal, but better than UA sniffing.
  if ("MozAppearance" in root.style) {

    // determine the vertical scrollbar width
    var scrollbarWidth = root.clientWidth;
    root.style.overflow = "scroll";
    scrollbarWidth -= root.clientWidth;
    root.style.overflow = "";

    // create a synthetic scroll event
    var scrollEvent = doc.createEvent("UIEvent")
    scrollEvent.initEvent("scroll", true, true);

    // event dispatcher
    function scrollHandler() {
      doc.dispatchEvent(scrollEvent)
    }

    // detect mouse events in the document scrollbar track
    doc.addEventListener("mousedown", function(e) {
      if (e.clientX > root.clientWidth - scrollbarWidth) {
        doc.addEventListener("mousemove", scrollHandler, false);
        doc.addEventListener("mouseup", function() {
          doc.removeEventListener("mouseup", arguments.callee, false);
          doc.removeEventListener("mousemove", scrollHandler, false);
        }, false)
      }
    }, false)

    // override mouse wheel behaviour.
    doc.addEventListener("DOMMouseScroll", function(e) {
      // Don't disable hot key behaviours
      if (!e.ctrlKey && !e.shiftKey) {
        root.scrollTop += e.detail * 16;
        scrollHandler.call(this, e);
        e.preventDefault()
      }
    }, false)

  }
})(document); 
</script>


<!-- FIXED HEADER jQUERY -->

<script type="text/javascript">
	$(function() {
		var bar = $('#header-bar');
		var top = bar.css('top');
		$(window).scroll(function() {
			if($(this).scrollTop() > 100) {
				bar.stop().animate({'top' : '0px'}, 200);
			} else {
				bar.stop().animate({'top' : top}, 200);
			}
		});
	});
</script>
