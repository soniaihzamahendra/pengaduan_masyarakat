<!-- Modal -->
<div class="modal fade" id="modalFormMasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Masyarakat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="masyarakat" >
                @csrf
                <div id="method"></div>
                <div class="form-group row">
                    <label for="id" class="col-sm-4 col-form-label">Id</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="id" placeholder="id" name="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nik" class="col-sm-4 col-form-label">Nik</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" placeholder="Nik" name="nik">
                    </div>
                </div>
                <div class="form-group row">
                      <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                      </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-sm-4 col-form-label">No Telp</label>
                    <div class="col-sm-8">
                      <input type="telp" class="form-control" id="telp" placeholder="No Telp" name="telp">
                    </div>
                </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      @method('POST') 
    </form>
    </div>
  </div>