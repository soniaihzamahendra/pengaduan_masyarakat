<!-- Modal -->
<div class="modal fade" id="modalFormPetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="petugas" >
              @csrf
              <div id="method"></div>
              <div class="form-group row">
                <label for="id_petugas" class="col-sm-4 col-form-label">Id Petugas</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="id_petugas" placeholder="id petugas" name="id_petugas">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_petugas" placeholder="nama petugas" name="nama_petugas">
                </div>
              </div>
              <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" placeholder="username" name="username">
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
              </div>
              <div class="form-group row">
                <label for="telp" class="col-sm-4 col-form-label">No Telp</label>
                <div class="col-sm-8">
                  <input type="telp" class="form-control" id="telp" placeholder="telp" name="telp">
                </div>
              </div>
              <div class="form-group row">
                <label for="level" class="col-sm-4 col-form-label">Level</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="level" placeholder="level" name="level">
                </div>
              </div>
             
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>