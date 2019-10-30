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
        <form class="user" method="post" action="" enctype="multipart/form-data">
        @csrf
        <select class="dropdown" name="SupportRenewMonth" id="SupportRenewMonth">
            @foreach ($jenisSapi as $data)
            @php
                $value = $data->nama_jenis;
                $output = str_replace('_', ' ', $value);
            @endphp
            <option value="12">{{$output}}</option>
            @endforeach  
                <option value="Other">Other</option>
            </select>
            <label labelfor="SupportRenewMonthManual" id="SupportRenewMonthManualLabel">Jenis Sapi : </label>
            <input type="text" name="SupportRenewMonthManual" id="SupportRenewMonthManual">
            <h6 class="m-3 font-weight-bold text-basic">Umur</h6>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="Umur" placeholder="Umur">
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Jumlah</h6>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="Jumlah" placeholder="Jumlah">
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Deskripsi</h6>
            <div class="form-group">
                <textarea class="form-control form-control-user" name="description" placeholder="Deskripsi"></textarea>
            </div>
            <h6 class="m-3 font-weight-bold text-basic">Foto Sapi</h6>
            <div class="form-group">
                <input type="file" class="form-control" name="thumbnail" placeholder="Nama Destinasi">
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