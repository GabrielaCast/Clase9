<?php
 	$controlador=new controlador();
 	$resultado=$controlador->index();
 ?>
<h3>Inicio</h3>
<table>
	<thead>
		<th>Id</th>
		<th>Cedula</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Promedio</th>
		<th>Acción</th>
	</thead>
	<tbody>
		<?php while($row=mysql_fetch_array($resultado)):?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['cedula'];?></td>
				<td><?php echo $row['nombre'];?></td>
				<td><?php echo $row['apellido'];?></td>
				<td><?php echo $row['promedio'];?></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>