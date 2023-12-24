<form method="POST" action="{{route('pengajuan.submit-surat-izin')}}" enctype="multipart/form-data">
	@csrf
	<table class="table">
		<tr>
			<td>Nomor Surat</td>
			<td>
				<input type="text" class="form-control" name="no_surat" required='required'>
			</td>
		</tr>
		<tr>
			<td>Tanggal Surat</td>
			<td>
				<div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    id="datepicker-autoclose"
                    placeholder="Tanggal Surat"
                    name="tgl_surat"
                    required="required"
                  />

                  <span class="input-group-text">
                    <i data-feather="calendar" class="feather-sm"></i>
                  </span>
                </div>
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
<script>
    jQuery("#datepicker-autoclose").datepicker({
      autoclose: true,
      todayHighlight: true,
    });
  </script>