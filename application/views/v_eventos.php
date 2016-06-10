<?php $this->load->view('v_header'); ?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<style type="text/css">
body{
    background: url('assets/img/eventos-fondo.jpg') no-repeat center center fixed;
    background-size: cover;
}
</style>
<div class="container-promocion">
	<div class="row">
		<div class="col-sm-7">
			<div id="eventos-container">
			    <h2>Viajes a conciertos en Guadalajara & Calendario de eventos</h2>
			    <span id="subtitulos">Próximas fechas</span>
			</div>
		</div>
	</div>
	<?php foreach ($eventos as $e => $value) { ?>
		<div class="row">
			<div class="col-sm-7">
				<div class="panel panel-default event">
				  <div class="panel-body">
				    <div class="rsvp col-xs-2 col-sm-2">
				      <i><?php echo date("d", strtotime($value->fecha));  ?></i>
			       		<i><?php echo mes(date("m", strtotime($value->fecha)));  ?></i>
				    </div>
				    <div class="info col-xs-8 col-sm-7">
				     	<h2 class="detalle-evento"><?php echo $value->artista ?></h2>
				     	<span> <?php echo '$'.$value->precio ?> </span>
				     	<p> <?php echo $value->lugar ?> | <?php echo format_hour($value->hora) ?> Hrs. </p>
				     	<a target="_blank" href="<?php echo $value->link ?>"> <?php echo $value->texto ?> </a>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<br>
	<?php } ?>
	
<br>
<br>
<br>
<br>
 <div class="col-sm-1 esconderlaapi" id="liquidBoxContainer"></div>

<?php $this->load->view('v_footer'); ?>