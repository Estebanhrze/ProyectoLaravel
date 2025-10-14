<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Proyecto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <h2 class="mb-3 text-center">Editar proyecto</h2>

      <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST" class="text-start">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del proyecto</label>
          <input class="form-control" name="nombre" id="nombre" type="text" value="{{ $proyecto->nombre }}" required>
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $proyecto->descripcion }}</textarea>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
      </form>

      <div class="text-center mt-3">
        <a href="{{ url('proyectos?view=list') }}" class="btn btn-link">Volver al listado</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
