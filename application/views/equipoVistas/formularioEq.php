
		
		<?php
		$nombre=array('name'=>'nombre','placeholder'=>'Ingresar aquí el nombre del equipo', 'class'=>'form-control');
		$division= array('name' =>'division', 'placeholder'=>'Ingrese división del equipo aquí', 'class'=>'form-control' );
		$fecha=array('name'=>'fecha');
		?>
<h3>Formulario de ingreso para equipos</h3>
<div class="row">
	<div class="container">
	<div class="panel panel-default">
    <div class="panel-body">
    	<?= form_open('/equiposCont/recibirDatos');?>
		<div class="form-group">
		<?= form_label('Nombre del equipo: ', 'nombre') ?>
		<?= form_input($nombre)?>
		</div>
		<br>

		<div class="form-group">
		<?= form_label('División del equipo: ', 'division')?>
		<?= form_input($division)?>
		</div>

		<div class="form-group">
		<?= form_label('Fecha de creación: ', 'fecha' )?>
		<?= form_input($fecha)?>
		</div>
		<?= form_submit('','Agregar equipo')?>
		<?= form_close()?>
	</div>
	</div>
	</div>
</div>
</html>