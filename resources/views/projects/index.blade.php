<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyectos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <div class="row mb-3 text-center">
    <div class="col">
      <h1 class="h3">Listado de los proyectos creados</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-9 mx-auto">

      <div class="text-center mb-3">
        <a href="{{ url('proyectos') }}" class="btn btn-outline-primary">Nuevo proyecto</a>
      </div>

      @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
      @endif

      <table class="table table-striped align-middle">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Creado</th>
            <th scope="col" class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($proyectos as $proyecto)
            <tr>
              <th scope="row">{{ $proyecto->id }}</th>
              <td>{{ $proyecto->nombre }}</td>
              <td>{{ $proyecto->descripcion }}</td>
              <td>
                {{ optional($proyecto->created_at)->format('Y-m-d H:i') ?? $proyecto->created_at }}
              </td>
              <td class="text-center">
                <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-sm btn-warning">
                  Editar
                </a>

                <form action="{{ route('proyectos.destroy', $proyecto->id) }}"
                      method="POST"
                      style="display:inline-block"
                      onsubmit="return confirm('¿Estás seguro de eliminar este proyecto?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center text-muted">No hay proyectos aún.</td>
            </tr>
          @endforelse
        </tbody>
      </table>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
