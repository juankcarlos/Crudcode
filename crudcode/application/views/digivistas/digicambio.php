<div class="section">
 <div class="container">
 	<div class="row-fluid">
 		

 		<form action="<?php echo base_url();?>index.php/elegidoController/actualizar"class="form-horizontal" method="POST">
		<input type="hidden" name="esc" value="<?php echo $act->id;?>"></input>
		<div class="form-group">
		<label class="col-md-2">Nombre</label>
		<div class="col-md-10">
		<input type="text" name="nombre"  value="<?php echo $act->nombre;?>" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Apellidos</label>
		<div class="col-md-10">
		<input type="text" name="apellido" value="<?php echo $act->apellido;?>" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Edad</label>
		<div class="col-md-10">
		<input type="text" name="edad"  value="<?php echo $act->edad;?>" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Digimon</label>
		<div class="col-md-10">
		<input type="text" name="digimon"  value="<?php echo $act->digimon;?>" class="form-control"/>
		</div>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<button type="submit" class="btn btn-primary">agregar</button>
		</div>
		<div class="col-md-4"></div>
		</form>
 	</div>
 </div>