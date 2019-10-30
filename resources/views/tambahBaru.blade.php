@extends('/layouts/app')
@section('content')

<div class="container-fluid">  
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Sapi</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    
    <div class="card-body">
    <form class="user" method="POST" action="{{route('tambahBaru.store')}}" enctype="multipart/form-data">
        @csrf
    
          
            <div class="form-group">
                <select name="id_jenis_sapi">
                    @foreach ($jenisSapi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_jenis }}</option>
                    @endforeach
                </select>
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Umur Dalam Bulan</h6>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="umur" placeholder="Umur">
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Jumlah</h6>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="jumlah" placeholder="Jumlah">
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Deskripsi</h6>
            <div class="form-group">
                <textarea class="form-control form-control-user" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Foto Sapi</h6>
            <div class="form-group">
                <input type="file" class="form-control" name="foto" placeholder="Foto Sapi">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
        </form>
        <a href="" class="btn btn-default btn-user btn-block">Batal</a>
        
    </div>
    </div>
</div>
@endsection
@section('js')
    <script>
   $(document).ready(function() {
    $('#SupportRenewMonthManualLabel').hide();
    $('#SupportRenewMonthManual').hide();
    $('#SupportRenewMonthManual').val($('#SupportRenewMonth').val());
    $('#SupportRenewMonth').change(function() {
        var selectedItem = $("select option:selected").val();
        if (selectedItem !== 'Other') {
            $('#SupportRenewMonthManualLabel').hide();
            $('#SupportRenewMonthManual').hide();
            $('#SupportRenewMonthManual').val($('#SupportRenewMonth').val());
        }
        else
        {
            $('#SupportRenewMonthManualLabel').show();
            $('#SupportRenewMonthManual').val('');
            $('#SupportRenewMonthManual').show();
        }
    });
});
    </script>
@endsection