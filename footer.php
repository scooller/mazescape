<?php
$logo=get_sitelogo();
?>
	<footer id="contacto">
		<div class="container">
			
		</div>
	</footer>
<?php wp_footer(); ?>
<?php the_field('codigo_footer','option'); 

$tiempo_espera=(intval(get_field('tiempo_espera','option'))/1000)+1;
?>
<style type="text/css">
.owl-carousel .owl-item .img-carousel{
    transition: background-size <?php echo $tiempo_espera; ?>s ease-in-out;
    -moz-transition: background-size <?php echo $tiempo_espera; ?>s ease-in-out;
    -ms-transition: background-size <?php echo $tiempo_espera; ?>s ease-in-out;
    -o-transition: background-size <?php echo $tiempo_espera; ?>s ease-in-out;
    -webkit-transition: background-size <?php echo $tiempo_espera; ?>s ease-in-out;
}
</style>
</body>
</html>