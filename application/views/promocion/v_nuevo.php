<style media="screen">
textarea {
  resize: none;
}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>./statics/css/barra.css">
<?php $this->load->view('layout_admin/header');?>
<div class="row head_verde" >
  <div class="col-xs-1">
    <i class="fa fa-cubes icono_libro" style="font-size: 45px !important"></i>
  </div>

  <div class="col-xs-1 barra_vertical" style="left: 15px;">
  </div>
  <div class="col-xs-6">
    <h2 style="margin-top:10px; color:white;margin-right: -100px;">Agregar promoción</h2>
  </div>

</div>
<?php  echo form_open_multipart('promocion/agregar?id='.$input_id,'id="form"') ?>
<input type="hidden" name="img" value="<?php echo $imagen ?>">
<input type="hidden" name="pdfsave" value="<?php echo $pdf ?>">
 	<div class="row">
	    <div class="col-sm-4 form-group col-sm-offset-1">
	        <label>Título</label>
	        <div>
	        	<?php echo $input_titulo; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('titulo') ?></span>
	    </div>
     	<div class="col-sm-5 form-group">
         <label>Destino</label>
	       <div>
	        	<?php echo $input_destino; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('destino') ?></span>
		</div>
		<div class="col-sm-2 form-group">
    	 	<label>Precio</label>
	       <div>
	        	<?php echo $input_precio; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('precio') ?></span>
		</div>
 	</div>
 	<div class="row">
      	<div class="col-md-5 col-sm-offset-1">
	        <label>Imagen:</label>
	         <?php if($imagen!=''){ ?> 
	         <a target="_blank" href="<?php echo base_url().'/'.$imagen ?>">ver imagen</a> 
	         <?php } ?>
	        <input type="file" id="imagen" name="imagen" />
	        <label style="color:#3498db">Tamaño de la imagen: 970px alto, 647px ancho.</label>
	         <span class="form-error"><?php echo form_error('imagen') ?></span>
      	</div>
      	<div class="col-sm-5">
	        <label>Anexar archivo</label>  
	        <?php if($pdf!=''){ ?> 
	         <a target="_blank" href="<?php echo base_url().'/'.$pdf ?>">ver pdf</a> 
	         <?php } ?>
	        <input type="file" id="pdf" name="pdf" />

	      </div>
    </div>
<br>
 	<div class="row">
		 <div class="col-sm-2 pull-right" style="margin-right:10px">
			<?php echo $btn_guardar ?>
		</div>
	</div>
</form>
<script type="text/javascript">
$(document).on('ready',function(){
$(".cantidad1").autoNumeric('init');
});
</script>
<?php $this->load->view('layout_admin/footer'); ?>