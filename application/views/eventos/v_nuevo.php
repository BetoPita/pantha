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
    <h2 style="margin-top:10px; color:white;margin-right: -100px;">Agregar eventos</h2>
  </div>

</div>
<?php  echo form_open_multipart('evento/agregar?id='.$input_id) ?>
 	<div class="row">
	    <div class="col-sm-5 form-group col-sm-offset-1">
	        <label>Artista:</label>
	        <div>
	        	<?php echo $input_artista; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('artista') ?></span>
	    </div>     	
	 	 <div class="col-sm-5 form-group">
	        <label>Lugar:</label>
	        <div>
	        	<?php echo $input_lugar; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('lugar') ?></span>
	    </div>
 	</div>
 	<div class="row">
 		<div class="col-sm-2 form-group col-sm-offset-1">
     		<label>Precio:</label>
	        <div>
	        	<?php echo $input_precio; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('precio') ?></span>
		</div>
		<div class="col-sm-2 form-group">
     		<label>Fecha:</label>
	        <div>
	        	<?php echo $input_fecha; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('fecha') ?></span>
		</div>
		<div class="col-sm-2 form-group">
     		<label>Hora:</label>
	        <div>
	        	<?php echo $input_hora; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('hora') ?></span>
		</div>
		<div class="col-sm-4 form-group">
     		<label>Texto (link):</label>
	        <div>
	        	<?php echo $input_texto; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('texto') ?></span>
		</div>
 	</div>
 	<div class="row">
 		 <div class="col-sm-5 form-group col-sm-offset-1">
	        <label>Link:</label>
	        <div>
	        	<?php echo $input_link; ?>
	        </div>
	        <span class="form-error"><?php echo form_error('link') ?></span>
	    </div>   
 	</div>
<br>
 	<div class="row">
		 <div class="col-sm-2 pull-right" style="margin-right:10px">
			<?php echo $btn_guardar ?>
		</div>
	</div>
</form>
<?php $this->load->view('layout_admin/footer'); ?>