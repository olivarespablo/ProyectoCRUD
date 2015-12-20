
		
		<?php
		$nombre=array('name'=>'nombre','placeholder'=>'Ingresar aquí el nombre del equipo', 'class'=>'form-control', 'value' => (isset($_POST['nombre'])) ? $_POST['nombre'] : '');
		$division= array('name' =>'division', 'placeholder'=>'Ingrese división del equipo aquí', 'class'=>'form-control', 'value' => (isset($_POST['division'])) ? $_POST['division'] : '' );
		$fecha=array('name'=>'fecha');
		?>
<div class="row">
	<div class="container">
		     <?php 
    echo validation_errors();
  ?>
	<div class="panel panel-default">
    <div class="panel-body">
    	<?php
     	echo form_open('/equiposCont/recibirDatos');
     	?>
		<div class="form-group">
		<?php 
		echo form_label('Nombre del equipo: ', 'nombre');
		echo form_input($nombre);
		?>
		</div>
		<br>

		<div class="form-group">
		<?php 
		echo form_label('División del equipo: ', 'division');
		echo form_input($division);
		?>
		</div>

		<div class="form-group">
		<?= form_label('Fecha de creación: ', 'fecha' )?>
		<?= form_input($fecha)?>
		</div>
		<?= form_submit('','Agregar equipo')?>
		<?php
		echo form_close();
		?>
	</div>
	</div>
	</div>
</div>
</html>