<form method="POST" action="" enctype="multipart/form-data">
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
			<td>Upload Scan File Surat Pernyataan Kompensasi</td>
			<td>
				<input type="file" class="form-control" name="surat_pernyataan" required='required'>
				<h6 class="card-subtitle mb-3" style="margin-top: 10px">
                  * Max 1 mb pdf (Opsional)
                </h6>
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="{{$data->id}}">
</form>