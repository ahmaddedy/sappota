<form method="POST" action="{{route('pengajuan.submit-telaah')}}" enctype="multipart/form-data">
	@csrf
	<table class="table">
		<tr>
			<td>Upload Scan File Telaah</td>
			<td>
				<input type="file" class="form-control" name="file_telaah">
				<h6 class="card-subtitle mb-3" style="margin-top: 10px">
                  * Max 1 mb pdf (Wajib diisi)
                </h6>
			</td>
		</tr>
		<tr>
			<td>Upload Scan File Berita Acara Serah Terima Kompensasi</td>
			<td>
				<input type="file" class="form-control" name="file_kompensasi" required='required'>
				<h6 class="card-subtitle mb-3" style="margin-top: 10px">
                  * Max 1 mb pdf (Opsional)
                </h6>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
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
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="{{$data->id}}">
</form>