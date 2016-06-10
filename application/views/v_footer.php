<!--</div> container -->
<footer>
        <div class="row">
        <div class="col-xs-12">
                <div id="Carousel" class="carousel slide">
                 
                <!--<ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol> -->
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                 	<?php $contador=0; ?>
                 	<?php $bandera=true; ?>
                    <?php foreach ($imagenes as $i => $value) { 
                    	if($contador==0){ ?>
                    	<div class="item <?php echo ($bandera==true)?'active':'' ?>">
		                    <div class="row">
                    	<?php } ?>
		                        <div class="col-xs-2" style="margin-right: "><a target="_blank" href="<?php echo $value->link ?>" class=""><img class="img img-responsive" src="<?php echo $value->imagen ?>" alt="Image" style="max-width:100%;"></a></div>		                   
		                <?php $contador++;
		                	if($contador==6){ 
		                		$contador=0;
		                		$bandera=false; ?>
                		 </div><!--.row-->
		                </div><!--.item-->
		                	<?php }?>
		                 
		             <?php } ?>
                </div><!--.carousel-inner-->

                </div><!--.Carousel-->
                 
        </div>
    </div>
</footer>
</body>


<script>
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	});
	$('#Carousel').carousel({
	    interval: 20000
	});
   var ancho = $(window).width();
   var alto = $(window).height();
   /*if(ancho == 750){

   }*/

});
</script>
<script type="text/javascript" src="assets/js/bootstrap.min.js" charset="UTF-8"></script>

<script type="text/javascript" src="assets/js/bootbox.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/js/General.js" charset="UTF-8"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->


</html>