
<?php echo $this->load->view('layout_admin/header'); ?>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>./statics/css/barra.css">

<div class="row head_verde" >
 	<div class="col-xs-2 col-sm-1">
 		<i class="fa fa-list-ul icono_libro" ></i>
 	</div>

    <div class="col-xs-2 barra_vertical" style="left: 15px;">
    </div>
    <div class="col-xs-2">
    	<h2 class="titulorow" style="margin-top:10px; color:white">Banner</h2>
    </div>
    <div class="btn-toolbar">
	    <div class="col-xs-6 col-sm-3 pull-right">
			<a type="button" id="js_agregar" class="btn-agregar btn btn-lg btn-block" style="background-color:#3498DB; margin-top:4px;" ><i class="fa fa-plus"></i> <span class="tituloadd">Añadir banner</span></a>
	    </div>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<table id="tbl_productos" class="table table-striped dataTable" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>Imagen</td>
					<td>Opciones</td>
				</tr>

			</thead>
			<tbody>

				<?php foreach ($banner as $i) {?>
				<tr>
					<td><img src="<?php echo base_url($i->imagen) ?>" style="width:100px;height:100px;"  alt=""></td>
					<td class="acciones">
						<a class="js_editar fa fa-pencil-square-o cursorPointer" title="Editar" data-toggle="tooltip" data-placement="top" data-id="<?php echo $i->id ?>"> <a/>
						<a class="js_eliminar fa fa-trash-o cursorPointer" title="Eliminar" data-toggle="tooltip" data-placement="top" data-id="<?php echo $i->id ?>"></a>
					</td>
				</tr>


				<?php } ?>
				
			</tbody>
		</table>
	</div>

</div>
<?php echo $this->load->view('layout_admin/footer'); ?>
<script src="statics/js/banner.js"></script>


