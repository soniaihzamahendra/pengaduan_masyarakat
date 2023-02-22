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

    $('.alert-success').fadeTo(2000,500).slideUp(500,function(){
        $('.alert-success').slideUp(500)
    })

    
</script>
@endpush
    