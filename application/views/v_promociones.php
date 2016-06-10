<?php $this->load->view('v_header'); ?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<style type="text/css">
body{
    background: url('assets/img/promociones-fondo.jpg') no-repeat center center fixed;
    background-size: cover;
}
</style>
<div class="container-promocion">
	<div class="container" style="margin-top:40px">
	<div class="row">
		<div class="col-sm-4 pull-right">
			<h3 style="font-weight: bold;color: black" class="stroke">
				Consúltenos sin compromiso, será un placer servirle
			</h3>
		</div>
	</div>
	<?php foreach ($promociones as $p => $value) { ?>
		<div class="row">
			<div class="col-sm-5">
					<div class="panel panel-default panel-horizontal">
					    <div class="panel-heading">
					       <img class="img" style="width:150px;height: 200px"  src="<?php echo $value->imagen ?>">
					    </div>
					    <div class="panel-body">
					    	<h3 class="titulo-promocion"><?php echo $value->destino ?></h3>
					    	<p class="texto-gris"><?php echo $value->titulo ?></p>
					    	<p class="promociones-precio"><?php echo $value->precio ?></p>
					    	<a class="texto-gris" target="_blank" href="<?php echo $value->imagen ?>"> Ver más </a>
					    </div>					  
					</div>
			</div>		
		</div>
	<?php } ?>
    <hr id="linea">
<br>
<br>
 <div class="col-sm-1 esconderlaapi" id="liquidBoxContainer"></div>
</div>
</div>
<?php $this->load->view('v_footer'); ?>