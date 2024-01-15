@extends('template.back-template')

@section('title')
Sappota' | Verifikasi
@endsection
<!-- <a onclick="uploadTelaah(${row['id']})" title="Upload Telaah dan BA Serah Terima" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i></a> -->
@section('css')
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/prismjs/themes/prism-okaidia.min.css')}}">
@endsection

@section('page-title')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-md-5 align-self-center">
        <h3 class="page-title">Pengajuan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Daftar Pengajuan Permohonan
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
                        <th width="10px">#</th>
                        <th>Jenis Pelayanan</th>
                        <th>Alasan</th>
                        <th>Jenis Pemohon</th>
                        <th>Area Pelayanan</th>
                        <th>Tanggal Permohonan</th>
                        <th>Status Pengajuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <td>#</td>
                        <th>Jenis Pelayanan</th>
                        <th>Alasan</th>
                        <th>Jenis Pemohon</th>
                        <th>Area Pelayanan</th>
                        <th>Tanggal Permohonan</th>
                        <th>Status Pengajuan</th>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
      
    </div>

  </div>
  <!-- Modal Detail -->
<div class="modal bs-example-modal-lg modal-detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Permohonan</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="
                  btn btn-light-danger
                  text-danger
                  font-weight-medium
                  waves-effect
                  text-start
                "
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Moda upload telaah dan berita acara -->
<div class="modal bs-example-modal-lg modal-send" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Buat Surat Izin</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="
                  btn btn-light-danger
                  text-danger
                  font-weight-medium
                  waves-effect
                  text-start
                "
                data-bs-dismiss="modal"
              >
                Close
              </button>
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
  <script src="{{asset('monster-new/dist/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/prismjs/prism.js')}}"></script>
  <script> 

    $(function () {

      let myTable = new DataTable('#myTable', {
          dom: 'Bfrtip',
          buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],
          "ajax" : "json-pengajuan",
          "columns" : [
              {"data" : null},
              {"data" : "jenis_pelayanan"},
              {"data" : "alasan"},
              {"data" : "jenis_pemohon"},
              {"data" : "letak_pohon"},
              {"data" : "tgl_permohonan"},
              {"data" : "nama_status"},
              {"data" : "id",
                  'render' : function(data, type, row) {
                    let url = '{{ route("pengajuan.verif", ["id"=>":id"]) }}';
                    route = url.replace(':id', row['id']);
                    let urlHapus = '{{ route("master-faq.hapus", ["id"=>":id"]) }}';
                    routeHapus = urlHapus.replace(':id', row['id']);

                      return `<div class='btn-group'><a title="Lihat Detail Pengajuan" class="btn btn-sm btn-info" onclick="detailPermohonan(${row['id']})"><i class="fas fa-eye"></i></a><a href="${route}" title="Verifikasi Pengajuan" onclick="return confirm('Apakah anda yakin akan melakukan verifikasi terhadap pengajuan ini?')" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a><a onclick="buatSuratIzin(${row['id']})" title="Buat Surat Izin Kepala Dinas" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i></a></div>`;
                  }
              },
          ],
          order: [[1, 'asc']],
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
      });

      myTable.on( 'order.dt search.dt', function () {
          myTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw(); 

    });

  </script>
  <script>
    function detailPermohonan(id) {
      $.ajax({
        type : "GET",
        url : "detail-permohonan/"+id,
        success : function(html) {
          $(".modal-detail .modal-body").html(html);
          $(".modal-detail").modal('show');
        }
      })
    }

    function uploadTelaah(id) {
      $.ajax({
        type : "GET",
        url : "pengajuan/upload-telaah/"+id,
        success : function(html) {
          $(".modal-send .modal-body").html(html);
          $(".modal-send").modal('show');
        }
      })
    }

    function buatSuratIzin(id) {
      $.ajax({
        type : "GET",
        url : "pengajuan/buat-surat-izin/"+id,
        success : function(html) {
          $(".modal-send .modal-body").html(html);
          $(".modal-send").modal('show');
        }
      })
    }
  </script>

@endsection