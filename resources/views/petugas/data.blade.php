<div class="mt-3">
    <table class="table table-hover table-compact" id="id">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>Id Petugas</th> --}}
                <th>Nama Petugas</th>
                <th>Username</th>
                {{-- <th>Password</th> --}}
                <th>No Telepon</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $pt)
                <tr>
                    <td> {{ $i = !isset($i)?$i=1: ++$i }}</td>
                    {{-- <td>{{ $pt->id_petugas }}</td> --}}
                    <td>{{ $pt->nama_petugas }}</td>
                    <td>{{ $pt->username }}</td>
                    {{-- <td>{{ $pt->password }}</td> --}}
                    <td>{{ $pt->telp }}</td>
                    <td>{{ $pt->level }}</td>
                    <td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalFormPetugas"
                              data-mode = "edit"
                              data-id_petugas = "{{ $pt->id_petugas }}"
                              data-nama_petugas = "{{ $pt->nama_petugas }}"
                              data-telp = "{{ $pt->telp }}"
                              data-username = "{{  $pt->username }}"
                              data-password = "{{  $pt->password }}"
                              data-level = "{{  $pt->level }}"
                            >
                              <i class="fas fa-pen"></i>  
                             </button>
                             <form action="{{ route('petugas.destroy', $pt->id) }}" method="post" style="display: inline;margin-left:10px">
                                @csrf
                                @method('DELETE')
                            <button type="button" class="btn btn-danger remove"
                             data-toggle="modal" data-target="#confirmDialog">
                                <i class="fas fa-trash"></i>
                            </button>
                             </form>
    
                            
                        </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div> 

{{-- Dialog konfirmasi delete --}}

<!-- Modal -->

<div class="modal fade" id="confirmDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Apakah data <b id="data-delete"></b> Akan dihapus?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary" id="btn-confirm">Ya, hapus data</button>
      </div>
    </div>
  </div>
</div>