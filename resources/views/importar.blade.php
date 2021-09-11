<!DOCTYPE html>
<html>
<head>
	<title>Importar y Exportar Excel *.xlsx</title>
	<link rel="stylesheet" href="public/css/boostrap.css">
</head>
<body>
<div class="container">
	<div class="card bg-light mt-3">
		<div class="card-header">
			Vista para importar y exportar archivo en Excel (Maatwebsite 3.1)
		</div>
		<div class="card-body">
			<form action="{{ route('importar') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<!--
				{{ csrf_field()}}
				-->
				<div class="form-group">
					<label for="exampleFormControlFile1">Subir archivo Excel</label>
					<input type="file" class="form-control-file" name="file">
				</div>
				<br>
				<button class="btn btn-success">Importar XLS</button>
				<a class="btn btn-warning" href="{{ route('exportar') }}">Exportar Tabla users_admin</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>