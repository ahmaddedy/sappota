@extends('template.web-template')

@section('title')
Sappota' | Home
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/prismjs/themes/prism-okaidia.min.css')}}">
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
                Input Data Pohon
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
          <h4 class="card-title mb-3 pb-3 border-bottom">Data Pohon dan Kompensasi</h4>
          <h5 class="card-subtitle mb-3">
            Form ini merupakan formulir isian data pengajuan permohonan pelayanan penebangan/pemangkasan/pemindahan pohon kepada Dinas Lingkungan Hidup Kota Makassar.
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
            <form method="POST" action="{{route('add-data-pohon')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$data->id}}">
              <div class="row">
                <div class="col-md-12">
                  <label for="tb-fname">Alamat Pohon</label>
                  <div class="form-floating mb-3">
                    <textarea name="alamat_pohon" id="" cols="30" rows="10" style="resize: none;" class="form-control" required='required'></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="kecamatan" id="kecamatan" class="form-control" onchange="pilihKel()">
                      <option>PILIH</option>
                      @foreach ($kec as $k)
                        <option value="{{$k->kode}}">{{$k->nama}}</option>
                      @endforeach
                    </select>
                    <label for="tb-fname">Kecamatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="kelurahan" id="kelurahan" class="form-control">
                      
                    </select>
                    <label for="tb-fname">Kelurahan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="nama_pohon"
                      id="nama_pohon"
                      placeholder="Nama Pohon"
                      required='required'
                    />
                    <label for="tb-fname">Nama Pohon</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="number"
                      class="form-control"
                      name="jumlah_pohon"
                      id="jumlah_pohon"
                      placeholder="Jumlah Pohon"
                      required='required'
                    />
                    <label for="tb-fname">Jumlah Pohon</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="jenis_pohon"
                      id="jenis_pohon"
                      placeholder="Jenis Pohon"
                      required='required'
                    />
                    <label for="tb-fname">Jenis Pohon</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="diameter_pohon"
                      id="diameter_pohon"
                      placeholder="Diameter Pohon"
                    />
                    <label for="tb-fname">Diameter Pohon</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="gambar_pohon"
                      placeholder="Gambar Denah/Lokasi/Site Plan"
                      required='required'
                    />
                    <label for="tb-fname">Gambar Pohon</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (Wajib diisi)
                    </h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="jenis_pohon_pengganti"
                      id="jenis_pohon_pengganti"
                      placeholder="Jenis Pohon Pengganti"
                    />
                    <label for="tb-fname">Jenis Pohon Pengganti</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="number"
                      class="form-control"
                      name="jumlah_pohon_pengganti"
                      id="jumlah_pohon_pengganti"
                      placeholder="Jumlah Pohon Pengganti"
                    />
                    <label for="tb-fname">Jumlah Pohon Pengganti</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="tb-fname">Lokas Pohon Pengganti</label>
                  <div class="form-floating mb-3">
                    <textarea name="lokasi_pohon_pengganti" id="" cols="30" rows="10" style="resize: none;" class="form-control"></textarea>
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
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/js/pages/forms/select2/select2.init.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/moment-js/moment.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/prismjs/prism.js')}}"></script>

  <script>
    function pilihKel() {
      let kec = $("#kecamatan").val();
      $.ajax({
        type : "GET",
        url : "/pilih-kel/"+kec,
        success : function(html) {
          $("#kelurahan").html(html);
        }
      });
    }
  </script>

@endsection