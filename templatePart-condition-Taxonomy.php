<?php $current= wp_strip_all_tags( get_the_term_list( get_the_ID(), 'portal') ); ?>

<!--  choix du  footer selon le portal -->

<?php 
if ($current == "MedicalExpo" )
	get_template_part('templates/footer', 'me');

if ($current == "ArchiExpo" )
	get_template_part('templates/footer', 'ae');

if ($current == "DirectIndustry" )
	get_template_part('templates/footer', 'di');

if ($current == "NauticExpo" )
	get_template_part('templates/footer', 'ne');
?>

<!-- Script main footer -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.scrollTo').click( function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>