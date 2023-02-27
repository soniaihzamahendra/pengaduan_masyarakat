<div class="mt-3">
    <table class="table table-hover table-compact" id="id">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>Id masyarakat</th> --}}
                <th>Nik</th>
                <th>Nama</th>
                <th>Username</th>
                {{-- <th>Password</th> --}}
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $ms)
                <tr>
                    <td> {{ $i = !isset($i)?$i=1: ++$i }}</td>
                    {{-- <td>{{ $ms->id_masyarakat }}</td> --}}
                    <td>{{ $ms->nik }}</td>
                    <td>{{ $ms->nama }}</td>
                    <td>{{ $ms->username }}</td>
                    {{-- <td>{{ $ms->password }}</td> --}}
                    <td>{{ $ms->telp }}</td>
                    <td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalFormMasyarakat"
                              data-mode = "edit"
                              data-id = "{{ $ms->id }}"
                              data-nik = "{{ $ms->nik }}"
                              data-nama = "{{ $ms->nama }}"
                              data-telp = "{{ $ms->telp }}"
                              data-username = "{{  $ms->username }}"
                              data-password = "{{  $ms->password }}"
                            >
                              <i class="fas fa-pen"></i>  
                             </button>
                             <form action="{{ route('masyarakat.destroy', $ms->id) }}" method="post" style="display: inline;margin-left:10px">
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