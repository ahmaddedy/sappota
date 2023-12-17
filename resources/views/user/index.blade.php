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
                Manajemen Data User
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
            <a href="{{route('master-user.add')}}" class="btn btn-sm btn-success">Tambah Data</a>
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
                        <th width="3px">#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>Pangkat</th>
                        <th>Golongan</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($user as $u)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$u->nama}}</td>
                      <td>{{$u->username}}</td>
                      <td>{{$u->jabatan}}</td>
                      <td>{{$u->nip}}</td>
                      <td>{{$u->pangkat}}</td>
                      <td>{{$u->gol}}</td>
                      <td>{{$u->getRoleNames()}}</td>
                      <td>
                        <div class='btn-group'>
                          <a class="btn btn-sm btn-info" href="{{route('master-user.edit', ['id' => $u->id])}}" title="Ubah Data"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-sm btn-success" href="{{route('master-user.reset', ['id' => $u->id])}}" title="Reset Password"><i class="fas fa-key"></i></a>
                          <a href="{{route('master-user.hapus', ['id' => $u->id])}}" title="Hapus Data" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>Pangkat</th>
                        <th>Golongan</th>
                        <th>Role</th>
                        <td></td>
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

@endsection