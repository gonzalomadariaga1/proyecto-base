<form method="POST" action="/reportes" enctype="multipart/form-data" class="submit-prevent-form">
    {{ csrf_field() }}
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Reportar error del sitio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Tu email">
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">URL del error</label>
                  <input type="text" class="form-control" name="url" placeholder="http//dominio.com/ventas/..." autocomplete="off">
                  <small>Copie la URL donde detectó el error.</small>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Dispositivo</label>
                  <select name="dispositivo" class="selectpicker" title="Seleccione dispositivo...">
                    <option value="computador" >Computador</option>
                    <option value="celular">Celular</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Descripción del error</label>
                  <textarea name="descripcion" class="form-control" rows="3" placeholder="Describa como ocurrió el error, cuales fueron los pasos que siguió para que se presentara el error..."></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancelar
            </a>
            {{-- <a href="#" type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              Enviar reporte
            </a> --}}
            <input class="btn btn-primary submit-prevent-button" type="submit" value="Enviar reporte">
          </div>
        </div>
      </div>
    </div>
  </form>