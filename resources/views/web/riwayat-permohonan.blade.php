@extends('template.web-template')

@section('title')
Sappota' | Home
@endsection

@section('css')
  <link rel="stylesheet" href="../monster-new/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
@endsection

@section('page-title')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-md-5 align-self-center">
        <h3 class="page-title">Riwayat Permohonan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Riwayat Permohonan 
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('main-content')
  <div class="container-fluid">
    <!-- Row -->
    <div class="row">
      
      <div class="card col-md-12">
        <div class="card-body">
          <h4 class="card-title mb-3 pb-3 border-bottom">Riwayat Permohonan</h4>
          <h5 class="card-subtitle mb-3">
            Ini merupakan tabel riwayat permohonan dari NIK yang telah melakukan penginputan data pemohon.
          </h5>
          <h6 class="card-subtitle mb-3">
            <a href="{{route('buat-permohonan')}}" class="btn btn-sm btn-success">Buat Permohonan Baru</a>
          </h6>
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="3px">#</th>
                        <th>Jenis Pelayanan</th>
                        <th>Alasan</th>
                        <th>Pemohon</th>
                        <th>Tanggal Permohonan</th>
                        <th>No. Permohonan</th>
                        <th>Nama Pohon</th>
                        <th>Alamat Pohon</th>
                        <th>Jenis Pohon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$d->pelayanan->jenis_pelayanan}}</td>
                      <td>{{$d->alasan}}</td>
                      <td>{{$d->jenis_pemohon}}</td>
                      <td>{{$d->tgl_permohonan}}</td>
                      <td>{{$d->no_permohonan}}</td>
                      <td>{{$d->nama_pohon}}</td>
                      <td>{{$d->alamat_pohon}}</td>
                      <td>{{$d->jenis_pohon}}</td>
                      <td>
                        <div class='btn-group'>
                          <a class="btn btn-sm btn-info" href="{{route('master-user.edit', ['id' => $d->id])}}" title="Ubah Data"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-sm btn-success" href="{{route('master-user.reset', ['id' => $d->id])}}" title="Reset Password"><i class="fas fa-key"></i></a>
                          <a href="{{route('master-user.hapus', ['id' => $d->id])}}" title="Hapus Data" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection

@section('js')
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="../monster-new/dist/js/pages/datatable/custom-datatable.js"></script>
  <script src="../monster-new/dist/js/pages/datatable/datatable-advanced.init.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

  <script> 

    $(function () {

      $('#myTable').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      } );  

    });

  </script>


@endsection