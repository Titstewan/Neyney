<?php
	// NeyNey!
	if ($context['current_board'] == 8)
		echo '
	<script src="', $settings['default_theme_url'], '/scripts/jquery-css-transform.js" type="text/javascript"></script>
	<script src="', $settings['default_theme_url'], '/scripts/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
	<script type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function() {
		var Neytiri = $("#neytiri_stalker"); // why yes, I am objectifying her.
		Neytiri.canMove = true;
		Neytiri.vOffset = 20; //px
		Neytiri.hOffset = 15; //px
		Neytiri.startMoving = function() {
			if(this.canMove)
			{
				moveHeight = ( $(window).height() + this.vOffset - ( this.height()) /2 ) + "px";
				//console.log(\'Moving her up \' + moveHeight);
				this.animate({
					bottom: "+=" + moveHeight,
					rotate: "-=100deg"
				}, 1000 );
				this.canMove = false;
			}
		}
		Neytiri.bind(\'mouseover\', function() {
			Neytiri.startMoving()
		});
	if (console.log) {
		console.warn(\'RDA hacker detected.\');
		console.info(\'Neytiri-is-watching-you.\');
	}
	});
	// ]'.']></script>
	<a href="', $scripturl, '?topic=27573" title="Neytiril tse\'a kemit a seri nga fìtseng!"><img id="neytiri_stalker" src="', $settings['images_url'], '/', $context['theme_variant_url'], '/neyney.png" style="border: none; position: fixed; bottom: -40px; right: -15px;"/></a>';
?>
