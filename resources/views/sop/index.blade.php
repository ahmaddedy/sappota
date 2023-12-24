@extends('template.back-template')

@section('title')
Sappota' | Pengaturan
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/select2/dist/css/select2.min.css')}}">
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
                Manajemen Data SOP
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
            <a href="{{route('master-sop.add')}}" class="btn btn-sm btn-success">Tambah Data</a>
          </h6>
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-bs-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
          @endif
          <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="3px">#</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($sop as $s)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$s->judul}}</td>
                      <td><img height="300" src="{{asset('storage'.str_replace('public', '', $s->gambar))}}" alt=""></td>
                      <td>{!! $s->keterangan !!}</td>
                      <td align="center">
                        <a href="{{route('master-sop.hapus', ['id' => $s->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <th>Judul</th>
                        <td></td>
                        <th>Keterangan</th>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
      
    </div>

  </div>

<!-- upload surat izin -->
<div class="modal bs-example-modal-lg modal-send" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Upload Surat Izin yang Telah Disahkan</h4>
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
 <!--This page plugins -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('monster-new/dist/js/pages/datatable/custom-datatable.js')}}"></script>
  <script src="{{asset('monster-new/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
  <script src="{{asset('monster-new/dist/libs/bootstrap-material-datetimepicker/node_modules/moment/moment.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/js/pages/forms/select2/select2.init.js')}}"></script>

  <script> 

    $(function () {
          
      $('#myTable tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
      } );

      $('#myTable').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'excel', 'pdf'
          ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          initComplete: function () {
              // Apply the search
              this.api().columns().every( function () {
                  var that = this;
   
                  $( 'input', this.footer() ).on( 'keyup change clear', function () {
                      if ( that.search() !== this.value ) {
                          that
                              .search( this.value )
                              .draw();
                      }
                  } );
              });
          }
      } );  

    });

  </script>
  <script>
    function upload(id) {
      $.ajax({
        type : "GET",
        url : "surat-izin/upload/"+id,
        success : function(html) {
          $(".modal-send .modal-body").html(html);
          $(".modal-send").modal('show');
        }
      })
    }
  </script>
@endsection