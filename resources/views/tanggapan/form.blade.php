<!-- Modal -->
<div class="modal fade" id="modalFormMasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Masyarakat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="masyarakat">
                @csrf
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tambah Masyarakat</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="masyarakat" value="" name="masyarakat">
            </div>
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>