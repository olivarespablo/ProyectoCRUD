
		
		<?php
		$nombre=array('name'=>'nombre','placeholder'=>'Ingresar aquí el nombre del jugador');
		$apellido= array('name' =>'division', 'placeholder'=>'Ingrese primer apellido' );
		$casaquilla=array('name'=>'casaquilla', 'placeholder'=>'Ingrese aquí número de casaquilla');
		?>

<div class="row">
		<div class="container">
		<div class="panel panel-default">
    	<div class="panel-body">
    		<?= form_open('/jugadoresCont/recibirDatos');?>
			<div class="form-group">
				<?= form_label('Nombre del Jugador: ', 'nombre') ?>
				<?= form_input($nombre)?>
			</div>
		<br>

		<div class="form-group">
			<?= form_label('Apellido: ', 'apellido')?>
			<?= form_input($apellido)?>
		</div>

		<div class="form-group">
			<?= form_label('Número de casaquilla: ', 'casaquilla' )?>
			<?= form_input($casaquilla)?>
		</div>
			<?= form_submit('','Agregar jugador')?>
			<?= form_close()?>
		</div>
	</div>
	</div>
</div>
	</body>

</html>