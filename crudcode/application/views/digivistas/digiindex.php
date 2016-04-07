<div class="section">
 <div class="container">
 	<div class="row-fluid">
 		<?php 
           $ms=$this->session->flashdata('mserroract');
 		  if($ms){
      			echo "<div class='alert alert-danger'>
   				 <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   				 <strong>Error al Actualizar </strong> ".$ms.".
  				</div>";
 			}?>
 		<?php $er=validation_errors();
          if($er){
          	echo "<div class='alert alert-danger'>
   				 <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   				 <strong>ERRO</strong>".validation_errors().".
  				</div>";
          }

 		?>

 		<?php 
           $ms=$this->session->flashdata('msa');
 		  if($ms){
      			echo "<div class='alert alert-success'>
   				 <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   				 <strong>EXITO </strong>".$ms.".
  				</div>";
 			}?>

 			<?php 
           $ms=$this->session->flashdata('msact');
 		  if($ms){
      			echo "<div class='alert alert-success'>
   				 <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   				 <strong>EXITO al Actualizar </strong>".$ms.".
  				</div>";
 			}?>	
 		
 		<form action="<?php echo base_url();?>index.php/elegidoController/crear"class="form-horizontal" method="POST">
		<div class="form-group">
		<label class="col-md-2">Nombre</label>
		<div class="col-md-10">
		<input type="text" name="nombre"  value="<?php echo set_value('nomnbre');?>" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Apellidos</label>
		<div class="col-md-10">
		<input type="text" name="apellido" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Edad</label>
		<div class="col-md-10">
		<input type="text" name="edad" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2">Digimon</label>
		<div class="col-md-10">
		<input type="text" name="digimon" class="form-control"/>
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

  
 
</div>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md4"></div>
			<div class="col-md4">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Edad</th>
							<th>Digimon</th>
						</tr>
					</thead>
					<tbody>
					 <?php foreach ($lis as  $v):
	 	               ?>
	 	               <tr>
	 	               	<td><?php echo $v->nombre;?></td>
	 	               	<td><?php echo $v->apellido;?></td>
	 	               	<td><?php echo $v->edad;?></td>
	 	               	<td><?php echo $v->digimon;?></td>
	 	               	<td><a class="btn btn-primary" href="<?php echo base_url();?>index.php/elegidoController/editar/<?php echo $v->id;?>">actualizar</a>
	 	               	</td>
	 	               	<td><a href="<?php echo base_url();?>index.php/elegidoController/borrarnino/<?php echo  $v->id;?>" class="btn btn-danger">X</a></td>
	 	               </tr>
	 					<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<div class="col-md4"></div>
		</div>
	</div>
</div>
<?php 
    $ms=$this->session->flashdata('msel');
   if($ms)
   {
?>
<?php echo "<div class='alert alert-danger'>
   				 <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   				 <strong>EXITO al Eliminar </strong>".$ms.".
  				</div>";?>
<?php
 }?>