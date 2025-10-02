<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <button type="button" class="btn btn-warning btn-edit">Editar</button>
</div>

<!-- Modal Supervisor -->
<div class="modal fade" id="modalSupervisor" tabindex="-1" aria-labelledby="modalSupervisorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="modalSupervisorLabel">Autorización de Supervisor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      
      <div class="modal-body">
        <form id="formSupervisor">
            @csrf
            <div class="mb-3">
                <label for="emailSupervisor" class="form-label">Correo del Supervisor</label>
                <input type="email" class="form-control" id="emailSupervisor" name="email" required>
            </div>
            <div class="mb-3">
                <label for="passwordSupervisor" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordSupervisor" name="password" required>
            </div>
            <div id="authError" class="text-danger small" style="display:none;">
                Credenciales inválidas o sin permisos.
            </div>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnAutorizar">Autorizar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    let autorizado = false;

    document.addEventListener('click', function (e) {
        if (!e.target.classList.contains('btn-edit')) return;

        if (!autorizado) {
            e.preventDefault();
            const modalElement = document.getElementById('modalSupervisor');
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }
    });
});
</script>

</body>
</html>