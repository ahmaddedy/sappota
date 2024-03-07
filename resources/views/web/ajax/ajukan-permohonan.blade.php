<form method="POST" action="{{route('submit-permohonan')}}" enctype="multipart/form-data">
	@csrf
	<table class="table">
		<tr>
			<td>Apakah anda yakin akan mengajukan permohonan ini?</td>
		</tr>
		<tr>
			<td align="right">
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