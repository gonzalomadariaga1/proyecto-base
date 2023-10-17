<div class="modal modal-blur fade" id="modal_notificacion" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Notificación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <div class="card">
                  <div class="card-header">
                    <h4 class="modal-title">
                      <span id="titulo"></span>
                    </h4>
                    <div class="card-actions">
                      <span class="badge bg-yellow ms-2" style="display:none;" id="badge_importante">Importante</span>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="contenido"></div>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex justify-content-end">
                      <div class="text-end">
                        <span ><i id="fecha"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary"  data-bs-dismiss="modal">
            Cerrar
          </a>
          <a  class="btn btn-primary" onclick="refresh()" id="btn_marcar_leido">Marcar como leído</a>
        </div>
      </div>
    </div>
  </div>