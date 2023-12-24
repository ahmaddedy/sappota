@extends('template.web-template')

@section('title')
Sappota' | Home
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
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
                        <th>Status</th>
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
                      <td>{{$d->status->nama_status}}</td>
                      <td align="center">
                        <div class='btn-group'>
                          <a class="btn btn-sm btn-info" onclick="detailPermohonan({{$d->id}})" title="Lihat Detail"><i class="fas fa-eye"></i></a>
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

<div class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Permohonan</h4>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@section('js')
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('monster-new/dist/js/pages/datatable/custom-datatable.js')}}"></script>

  <script> 

    $(function () {

      $('#myTable').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      } );  

    });

    function detailPermohonan(id) {
      $.ajax({
        type : "GET",
        url : "detail-permohonan/"+id,
        success : function(html) {
          $(".bs-example-modal-lg .modal-body").html(html);
          $(".bs-example-modal-lg").modal('show');
        }
      })
    }

  </script>


@endsection