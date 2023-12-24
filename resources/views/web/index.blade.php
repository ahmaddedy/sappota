@extends('template.web-template')

@section('title')
Sappota' | Home
@endsection

@section('css')
  
@endsection

@section('page-title')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-md-5 align-self-center">
        <h3 class="page-title">Form Permohonan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Isi Data Pemohon
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
          <h4 class="card-title mb-3 pb-3 border-bottom">Data Pemohon</h4>
          <h5 class="card-subtitle mb-3">
            Form ini merupakan formulir isian data pemohon yang akan mengajukan permohonan penebangan/pemangkasan/pemindahan pohon kepada Dinas Lingkungan Hidup Kota Makassar.
          </h5>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            <form method="POST" action="{{route('add-data-pemohon')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="nik"
                      id="nik"
                      placeholder="NIK"
                      required="required"
                      onkeyup="cekNik()"
                    />
                    <label for="tb-fname">NIK</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="nama"
                      id="nama"
                      placeholder="Nama Lengkap"
                      required="required"
                    />
                    <label for="tb-fname">Nama Lengkap</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="telp"
                      id="telp"
                      placeholder="Nomor Telepon"
                      required='required'
                    />
                    <label for="tb-fname">Nomor Telepon</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Email"
                      required="required"
                    />
                    <label for="tb-email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="file_ktp"
                      placeholder="Scan KTP"
                      required="required"
                    />
                    <label for="tb-fname">Scan KTP</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (opsional)
                    </h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="pekerjaan"
                      id="pekerjaan"
                      placeholder="Pekerjaan"
                    />
                    <label for="tb-email">Pekerjaan</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="tb-email">Alamat</label>
                  <div class="form-floating mb-3">
                    <textarea name="alamat" id="alamat" cols="30" rows="10" style="resize: none;" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                      <button
                        type="submit"
                        class="
                          btn btn-info
                          font-weight-medium
                          rounded-pill
                          px-4
                        "
                      >
                        <div class="d-flex align-items-center">
                          <i
                            data-feather="send"
                            class="feather-sm fill-white me-2"
                          ></i>
                          Simpan
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection

@section('js')

  <script>
    function cekNik() {
      let nik = $("#nik").val();
      $.ajax({
        url : "{{route('cek-nik')}}",
        type : "GET",
        data : "nik="+nik,
        dataType : "JSON",
        success : function(data) {
          $("#nama").val(data.data.nama);
          $("#telp").val(data.data.telp);
          $("#email").val(data.data.email);
          $("#pekerjaan").val(data.data.pekerjaan);
          $("#alamat").val(data.data.alamat);
        }
      });
    }
  </script>

@endsection