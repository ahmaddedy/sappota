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
                Buat Permohonan 
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
          <h4 class="card-title mb-3 pb-3 border-bottom">Data Permohonan</h4>
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
            <form method="POST" action="{{route('add-data-permohonan')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="jenis_pelayanan" id="" class="form-control">
                      @foreach ($pelayanan as $p)
                        <option value="{{$p->id}}">{{$p->jenis_pelayanan}}</option>
                      @endforeach
                    </select>
                    <label for="tb-fname">Jenis Pelayanan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select name="jenis_pemohon" id="" class="form-control">
                      <option value="Pribadi">Pribadi</option>
                      <option value="Instansi Pemerintah">Instansi Pemerintah</option>
                      <option value="Instansi Swasta">Instansi Swasta</option>
                    </select>
                    <label for="tb-fname">Jenis Pemohon</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="tb-fname">Alasan Permohonan</label>
                  <div class="form-floating mb-3">
                    <textarea name="alasan" id="" cols="30" rows="10" style="resize: none;" class="form-control" required='required'></textarea>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Jika alasan permohonan penebangan/pemindahan karena menghalangi akses, maka pemohon wajib mengunggah gambar letak pohon/site plan bangunan.
                    </h6>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="">Lokasi Pohon</label>
                  <div>
                    <input
                      type="radio"
                      class="btn-check"
                      name="letak_pohon"
                      id="option2"
                      autocomplete="off"
                      value="public"
                      checked='checked'
                    />
                    <label
                      class="
                        btn btn-outline-warning
                        rounded-pill
                        font-weight-medium
                        me-2
                        mb-2
                      "
                      for="option2"
                      >Public</label
                    >
                    <input
                      type="radio"
                      class="btn-check"
                      name="letak_pohon"
                      id="option3"
                      autocomplete="off"
                      value="private/sendiri"
                    />
                    <label
                      class="
                        btn btn-outline-danger
                        rounded-pill
                        font-weight-medium
                        me-2
                        mb-2
                      "
                      for="option3"
                      >Private/Sendiri</label
                    >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="datepicker-autoclose"
                        placeholder="Tanggal Permohonan"
                        name="tgl_permohonan"
                        required="required"
                      />

                      <span class="input-group-text">
                        <i data-feather="calendar" class="feather-sm"></i>
                      </span>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="gambar_letak_pohon_site_plan"
                      placeholder="Gambar Denah/Lokasi/Site Plan"
                    />
                    <label for="tb-fname">Gambar Denah/Lokasi/Site Plan</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (wajib diisi jika alasan penebangan karena menghalangi akses)
                    </h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="scan_imb"
                      placeholder="Scan IMB"
                    />
                    <label for="tb-fname">Scan IMB</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (opsional)
                    </h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="scan_izin_usaha"
                      placeholder="Scan Izin Usaha"
                    />
                    <label for="tb-fname">Scan Izin Usaha</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (opsional)
                    </h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="file"
                      class="form-control"
                      name="scan_izin_penyambungan_jalan_masuk"
                      placeholder="Scan Izin Penyambungan Jalan Masuk"
                    />
                    <label for="tb-fname">Scan Izin Penyambungan Jalan Masuk</label>
                    <h6 class="card-subtitle mb-3" style="margin-top: 10px">
                      * Max 1 mb pdf (opsional)
                    </h6>
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
    jQuery("#datepicker-autoclose").datepicker({
      autoclose: true,
      todayHighlight: true,
    });
  </script>

@endsection