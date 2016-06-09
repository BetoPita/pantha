
<?php   $this->load->view('layout_admin/header'); ?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>./statics/css/barra.css">
 <script src="statics/js/evento.js"></script>
 
 <div class="row head_verde" >
   	<div class="col-xs-1">
   		<i class="fa fa-cubes icono_libro" ></i>
   	</div>

    <div class="col-xs-2 barra_vertical " style="left: 15px;">
    </div>
    <div class="col-xs-2">
    	<h2 style="margin-top:10px; color:white">Eventos</h2>
    </div>
    <div class="btn-toolbar">
	    <div class="col-xs-3 pull-right">
			<a type="button" id="js_agregar" class="btn-agregar btn btn-lg btn-block" style="background-color:#3498DB; margin-top:4px;" href="<?php echo site_url('evento/agregar?id=0');?>"><i class="fa fa-plus"></i> Añadir evento</a>
	    </div>
    </div>
  
  </div>


<div class="row">
	<div class="col-md-12">
		<table id="tbl_evento" class="table table-striped dataTable table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
          <td>Artista</td>
					<td>Precio</td>
					<td>Lugar</td>
					<td>Fecha</td>				
          <td>Hora</td>
          <td>Opciones</td>
				</tr>

			</thead>
			<tbody>

				<?php foreach ($evento as $s) {?>
                  <tr>
          					<td><?php echo $s->artista; ?></td>
          					<td><?php echo $s->precio; ?></td>
                    <td><?php echo $s->lugar; ?></td>
                    <td><?php echo date_eng2esp_1($s->fecha); ?></td>
          					<td><?php echo $s->hora; ?></td>
          					

          					<td class="acciones">
          						<a class="js_editar fa fa-pencil-square-o cursorPointer" title="Editar" data-toggle="tooltip" data-placement="top" href="<?php echo site_url('evento/agregar?id='); echo $s->id ?>"> <a/>
          						<a class="js_eliminar fa fa-trash-o cursorPointer" title="Eliminar" data-toggle="tooltip" data-placement="top" data-id="<?php echo $s->id ?>"></a>
          					</td>
          				</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>

</div>
<?php  $this->load->view('layout_admin/footer'); ?>

