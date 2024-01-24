@extends('template.web-template')

@section('title')
Sappota' | Referensi Pohon
@endsection

@section('css')
  
@endsection

@section('page-title')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-md-5 align-self-center">
        <h3 class="page-title">Home</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                Referensi Pohon
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
      
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div
            class="
              d-flex
              border-bottom
              title-part-padding
              align-items-center
            "
          >
            <div>
              <h4 class="card-title mb-0">Referensi Pohon</h4>
            </div>
          </div>
          <div class="card-body">
            <div
              class="accordion accordion-flush"
              id="accordionFlushExample"
            >
              @foreach ($pohon as $p)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapse{{$p->id}}"
                      aria-expanded="false"
                      aria-controls="flush-collapse{{$p->id}}"
                    >
                      <b>{{$p->jenis_pohon}} (<i>{{$p->nama_latin}}</i>)</b>
                    </button>
                  </h2>
                  <div
                    id="flush-collapse{{$p->id}}"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <img src="{{asset('storage'.str_replace('public', '', $p->gambar))}}" alt="" height="300px;"><br>
                      Keterangan : {!! $p->keterangan !!}
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection

@section('js')
 
@endsection