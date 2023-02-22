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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormMasyarakat">
                Tambah Masyarakat
            </button>
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

</script>
@endpush
    