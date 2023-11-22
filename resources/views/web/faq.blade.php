@extends('template.web-template')

@section('title')
Sappota' | FAQ
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
                FAQ
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
              <h4 class="card-title mb-0">Frequently Asked Questions (FAQ)</h4>
            </div>
          </div>
          <div class="card-body">
            <div
              class="accordion accordion-flush"
              id="accordionFlushExample"
            >
              @foreach ($faq as $f)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapse{{$f->id}}"
                      aria-expanded="false"
                      aria-controls="flush-collapse{{$f->id}}"
                    >
                      {!! $f->pertanyaan !!}
                    </button>
                  </h2>
                  <div
                    id="flush-collapse{{$f->id}}"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      {!! $f->jawaban !!}
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