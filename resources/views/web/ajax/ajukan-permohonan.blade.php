<form method="POST" action="{{route('submit-permohonan')}}" enctype="multipart/form-data">
	@csrf
	<table class="table">
		<tr>
			<td colspan="2">
			<a href="{{route('download-permohonan', ['id' => $data->id])}}" target="_blank">Download File Surat Permohonan</a>
			</td>
		</tr>
		<tr>
			<td>Upload Scan File Surat Permohonan</td>
			<td>
				<input type="file" class="form-control" name="surat_permohonan" required='required'>
				<h6 class="card-subtitle mb-3" style="margin-top: 10px">
                  * Max 1 mb pdf (Wajib diisi)
                </h6>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<a href="{{route('download-pernyataan', ['id' => $data->id])}}" target="_blank">Download File Surat Pernyataan Kewajiban Kompensasi</a>
			</td>
		</tr>
		<tr>
			<td>Upload Scan File Surat Pernyataan Kompensasi</td>
			<td>
				<input type="file" class="form-control" name="surat_pernyataan" required='required'>
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
	                       Ajukan Permohonan
	                    </div>
	                  </button>
	                </div>
              	</div>
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="{{$data->id}}">
</form>