@extends('template.back-template')

@section('title')
Sappota' | Pengaturan
@endsection

@section('css')
  <link rel="stylesheet" href="../monster-new/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../monster-new/dist/libs/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../monster-new/dist/libs/select2/dist/css/select2.min.css">
@endsection

@section('page-title')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-md-5 align-self-center">
        <h3 class="page-title">Pengaturan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Manajemen Data FAQ
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
      
      <div class="card">
        <div class="card-body">
          <h6 class="card-subtitle mb-3">
            <a href="{{route('master-faq.add')}}" class="btn btn-sm btn-success">Tambah Data</a>
          </h6>
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10px">#</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <th width="10px">#</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
      
    </div>

  </div>
@endsection

@section('js')
 <!--This page plugins -->
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
  <script src="../monster-new/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js"></script>
  <script src="../monster-new/dist/libs/daterangepicker/daterangepicker.js"></script>
  <script src="../monster-new/dist/libs/select2/dist/js/select2.full.min.js"></script>
  <script src="../monster-new/dist/libs/select2/dist/js/select2.min.js"></script>
  <script src="../monster-new/dist/js/pages/forms/select2/select2.init.js"></script>

  <script> 

    $(function () {

      let myTable = new DataTable('#myTable', {
          "ajax" : "json-faq",
          "columns" : [
              {"data" : null},
              {"data" : "pertanyaan"},
              {"data" : "jawaban"},
              {"data" : "status",
                  'render' : function(status) {
                    if (status == "1") 
                      sta = "<button class='btn btn-sm btn-success'>Aktif</button>";
                    else 
                      sta = "<button class='btn btn-sm btn-danger'>Tidak Aktif</button>";

                    return "<div class='btn-group'>"+sta+"</div>";
                  }
              },
              {"data" : "id",
                  'render' : function(data, type, row) {
                    let url = '{{ route("master-faq.edit", ["id"=>":id"]) }}';
                    route = url.replace(':id', row['id']);
                    let urlHapus = '{{ route("master-faq.hapus", ["id"=>":id"]) }}';
                    routeHapus = urlHapus.replace(':id', row['id']);

                      return `<div class='btn-group'><a href="${route}" title="Ubah Data" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a><a href="${routeHapus}" title="Hapus Data" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a></div>`;
                  }
              },
          ],
          order: [[1, 'asc']],
      });

      myTable.on( 'order.dt search.dt', function () {
          myTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw(); 

    });

  </script>

@endsection