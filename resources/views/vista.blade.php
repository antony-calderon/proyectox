<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MATRICES</title>


	<!-- Último CSS compilado y minificado-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



	
</head>
<body>

	<h1>INFORMACION</h1>

	<h2>criterio de busqueda</h2>

	<form action="{{url('matrices')}}" method="POST">
		{{csrf_field()}}
		
        <section class="form-group">
        	<label for="nombre">NOMBRE</label>
        	<input type="text" name="nombre" placeholder="ingresa el nombre aqui" class="form-control">
        </section>
        <!--<article class="consulta">
        	<label for="nombre">nombre</label>
		<input type="text" name="nombre">
		</article>-->

		<section class="form-group">
        	<label for="nombre">APELLIDO</label>
        	<input type="text" name="apellido" placeholder="ingresa el apellido aqui" class="form-control">
        </section>

        <!--<article>
		<input type="text" name="apellido">
		</article>-->

		<section class="form-group">
        	<label for="nombre">EDAD</label>
        	<input type="text" name="edad" placeholder="ingresa la edad aqui" class="form-control">
        </section>

        <!--<article>
		<input type="text" name="edad">
		</article>-->

		<section class="form-group">
        	<label for="nombre">SEXO</label>
        	<input type="text" name="sexo" placeholder="ingresa masculino o femenino" class="form-control">
        </section>

        <!--<article>
		<input type="text" name="sexo">
		</article>-->

		<section class="form-group">
        	<label for="nombre">TELEFONO</label>
        	<input type="text" name="telefono" placeholder="ingresa el telefono aqui" class="form-control">
        </section>

        <!--<article>
		<input type="text" name="telefono">
		</article>-->

		<section class="form-group">
        	<label for="nombre">CURSO</label>
        	<input type="text" name="curso" placeholder="ingresa el curso aqui" class="form-control">
        </section>

        <!--<article>
		<input type="text" name="curso">
		</article>-->

		<button type="submit" class="btn btn-danger">enviar</button>
	</form>
</section>
<section>
	@yield('contenido')
</section>
	

	
</body>
</html>