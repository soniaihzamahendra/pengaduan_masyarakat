@extends('template.layout')

@push('style')
    
@endpush

@section('content')
<section class="content">
    {{-- Default box --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Masyarakat</h3>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{  $error }}</li>  
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        {{-- modal --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormMasyarakat">
                Tambah Masyarakat
            </button>
            @include('masyarakat.data')
        </div>

        <div class="card-footer">
            Footer
        </div>
    </div>
    @include('masyarakat.form')
</section>
@endsection

@push('script')
<script>
//  $('#data-masyarakat').DataTable();
    $('.alert-success').fadeTo(2000,500).slideUp(500,function(){
        $('.alert-success').slideUp(500)
    })

    $('.remove').on('click', function(){
      const data = $(this).closest('tr').find('td:eq(1)').text()

      $('#data-delete').text(data)

      const form = $(this).closest('tr').find('form')
      $('#btn-confirm').on('click', function(){
        form.submit()
      })
    })
    //update or input
    $('#modalFormMasyarakat').on('show.bs.modal', function(e){
      const btn = $(e.relatedTarget)
      const modal = $(this)
      const mode = btn.data('mode')
      const id = btn.data('id')
      const nik = btn.data('nik')
      const nama = btn.data('nama')
      const telp = btn.data('telp')
      const username = btn.data('username')
      const password = btn.data('password')
      
    //   const nik = btn.data('nik')
      if(mode === 'edit'){
        modal.find('.modal-title').text('Edit Data')
        modal.find('#id').val(id)
        modal.find('#nik').val(nik)
        modal.find('#nama').val(nama)
        modal.find('#telp').val(telp)
        modal.find('#username').val(username)
        modal.find('#password').val(password)
        modal.find('#method').html('@method("PATCH")')
        modal.find('form').attr('action',`{{ url('masyarakat') }}/${id}`)
      } else{
        modal.find('.modal-title').text('Form masyarakat')
        modal.find('#id').val('')
        modal.find('#nik').val('')
        modal.find('#nama').val('')
        modal.find('#telp').val('')
        modal.find('#username').val('')
        modal.find('#password').val('')
        modal.find('#method').html('')
        modal.find('form').attr('action','{{ url("masyarakat") }}')
      }
    })
    $('#modalFormMasyarakat').on('shown.bs.modal', function(){
    $('#id').delay(1000).focus().select();
    })
</script>
@endpush
    