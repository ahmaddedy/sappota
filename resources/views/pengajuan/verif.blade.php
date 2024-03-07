@extends('template.back-template')

@section('title')
Sappota' | Verifikasi
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
  <link rel="stylesheet" href="{{asset('monster-new/dist/libs/ckeditor/samples/css/samples.css')}}">
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
                Verifikasi Pengajuan
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
      <div class="col-12">
        <!-- ----------------------------------------- -->
        <!-- 1. Basic Form -->
        <!-- ----------------------------------------- -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-3 pb-3 border-bottom">Form Verifikasi Pengajuan</h4>
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
                <button type="button" class="close" data-dismiss="alert">×</button> 
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            <form method="POST" action="{{route('pengajuan.action-verif')}}">
              @csrf
              <div class="row">

                <div class="col-md-12">
                  <label for="">Status Persetujuan</label>
                  <div>
                    <input
                      type="radio"
                      class="btn-check"
                      name="status_pengajuan"
                      id="option2"
                      autocomplete="off"
                      value="5"
                      checked='checked'
                    />
                    <label
                      class="
                        btn btn-outline-success
                        rounded-pill
                        font-weight-medium
                        me-2
                        mb-2
                      "
                      for="option2"
                      >Pengajuan Disetujui Untuk Dilakukan Survei</label
                    >
                    <input
                      type="radio"
                      class="btn-check"
                      name="status_pengajuan"
                      id="option3"
                      autocomplete="off"
                      value="9"
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
                      >Pengajuan Ditolak</label
                    >
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="">Keterangan Verifikator</label>
                  <div class="form-floating mb-3">
                    <textarea
                      cols="80"
                      id="testedit"
                      name="catatan"
                      rows="10"
                      data-sample="1"
                      data-sample-short
                    >
                    </textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                      <input type="hidden" name="id" value="{{$data->id}}">
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

  </div>
@endsection

@section('js')
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/js/pages/forms/select2/select2.init.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/ckeditor/samples/js/sample.js')}}"></script>

  <script data-sample="1">
    CKEDITOR.replace("testedit", {
      height: 150,
    });
  </script>
  <script>
    $(document).ready(function(){
      $("#confirm").hide();
    });

    function matching() {
      let pass = $("#password").val();
      let pass_con = $("#password_confirmation").val();

      if (pass != pass_con)
        $("#confirm").show();
      if (pass == pass_con)
        $("#confirm").hide();
    }
  </script>
@endsection
