<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <h2 class="mb-3 text-center">Crear nuevo proyecto</h2>

          {{-- Mensaje de éxito opcional --}}
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form action="{{ route('proyectos.store') }}" method="POST" class="text-start">
            @csrf

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre del proyecto</label>
              <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Ingrese el título del proyecto" required>
            </div>

            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción breve"></textarea>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>

          <div class="text-center mt-3">
            <a href="{{ route('proyectos.index') }}" class="btn btn-link">Volver al listado</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
