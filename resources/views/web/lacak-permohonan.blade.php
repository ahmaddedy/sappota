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
        <h3 class="page-title">Lacak Permohonan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Lacak Permohonan 
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
    
      <form action="{{route('cek-permohonan')}}" method="post">
        @csrf
        <table class="table">
          <tr>
            <td>
              <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
            </td>
            <td>
              <input type="submit" name="submit" value="Kirim" class="btn btn-info">
            </td>
          </tr>
        </table>
      </form>    
  </div>
@endsection