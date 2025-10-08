<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyectos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container py-4">
  <div class="row mb-3 text-center">
    <div class="col">
      <h1 class="h3">Hello, world!</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-9 mx-auto">
      <table class="table table-striped align-middle">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Creado</th>
          </tr>
        </thead>
        <tbody>
          @forelse($proyectos as $proyecto)
            <tr>
              <th scope="row">{{ $proyecto->id }}</th>
              <td>{{ $proyecto->nombre }}</td>
              <td>{{ $proyecto->descripcion }}</td>
              <td>{{ $proyecto->created_at }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="text-center text-muted">No hay proyectos aún.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>
