@extends('template.back-template')

@section('title')
Sappota' | Pengaturan
@endsection

@section('css')
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
                Tambah Data User
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
            <h4 class="card-title mb-3 pb-3 border-bottom">Form Tambah Data User</h4>
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
            <form method="POST" action="{{route('master-user.action-add')}}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="nama"
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
                      name="username"
                      placeholder="Username"
                      required="required"
                    />
                    <label for="tb-fname">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="Password"
                      id="password"
                      onkeyup="matching()"
                      required="required"
                    />
                    <label for="tb-fname">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="password"
                      class="form-control"
                      name="password_confirmation"
                      placeholder="Password Confirmation"
                      id="password_confirmation"
                      onkeyup="matching()"
                      required="required"
                    />
                    <label for="tb-email">Password Confirmation</label>
                    <p id="confirm" style="color: red">Password dan Password Confirmation Tidak Sama</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="nip"
                      placeholder="Nip"
                    />
                    <label for="tb-fname">Nip</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="jabatan"
                      placeholder="Jabatan"
                      required="required"
                    />
                    <label for="tb-email">Jabatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="pangkat"
                      placeholder="Pangkat"
                    />
                    <label for="tb-fname">Pangkat</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="gol"
                      placeholder="Golongan"
                    />
                    <label for="tb-email">Golongan</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <select name="role" id="role" class="select2 form-control custom-select" style="width: 100%;">
                      <option value="">Pilih Role User</option>
                      @foreach($role as $r)
                        <option>{{$r->name}}</option>
                      @endforeach
                    </select>
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

  </div>
@endsection

@section('js')
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('monster-new/dist/js/pages/forms/select2/select2.init.js')}}"></script>

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
