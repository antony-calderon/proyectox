@extends('vista')
@section('contenido')

<table>
	<thead>
		<th>nombre</th>
		<th>apellido</th>
		<th>edad</th>
		<th>sexo</th>
		<th>telefono</th>
		<th>curso</th>
	</thead>
	<tbody>

		<?php
		foreach ($resp as $as => $resp1):
		 ?>

		 <tr>

		 	<?php
		 	foreach ($resp1 as $key => $value): 
		 	 ?>

		 	 <td>{{$value}}</td>

		 	 <?php
		 	 endforeach 
		 	  ?>

		 </tr>

		 <?php
		 endforeach 
		  ?>

	</tbody>
</table>
@stop