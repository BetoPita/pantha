<?php $this->load->view('v_header'); ?>

<link rel="stylesheet" href="assets/css/style2.css"> 


<!--<div class="row">
    <div class="col-sm-1" id="liquidBoxContainer"></div>

</div> -->
<style type="text/css">
.header{
	position: relative !important;
}
</style>
<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators"> 
        	<?php $contador_s=0; ?>
        	<?php foreach ($banner as $b => $value) {  ?>
        		 <li data-target="#myCarousel" data-slide-to="<?php echo $contador_s; ?>" class="<?php echo ($contador_s==0)?'active': '' ?>"></li>

        	<?php $contador_s++; } ?>
        </ol>-->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
        	<?php $contador=0; ?>
	    	<?php foreach ($banner as $b => $value) { $contador++; ?>
	    		 <div class="item <?php echo ($contador==1)?'active': '' ?>">
	            	<img class="img img-responsive img-slider" src="<?php echo $value->imagen ?>" alt="">
	            </div>
	    	<?php } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev" style="font-size:100px;margin-top: -90px;margin-right: 0px;"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next" style="font-size:100px;margin-top: -90px;margin-right: 0px;"></span>
        </a>

    </header>


<?php $this->load->view('v_footer'); ?>
