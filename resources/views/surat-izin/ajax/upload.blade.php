<form action="{{route('surat-izin.action-upload')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="file" required='required' name="path_file" class="form-control">
	<h6 class="card-subtitle mb-3" style="margin-top: 10px">
      * Max 1 mb pdf (Wajib)
    </h6>
    <input type="hidden" name="id" value="{{$data->id}}">
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
                class="fas fa-paper-plane"
              ></i>
               Simpan
            </div>
          </button>
        </div>
  	</div>
</form>