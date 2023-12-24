<h4>Data Pemohon</h4>
<table class="table table-striped">
	<tr>
		<td>NIK</td>
		<td>{{$data->pemohon->nik}}</td>
	</tr>
	<tr>
		<td>Nama Pemohon</td>
		<td>{{$data->pemohon->nama}}</td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>{{$data->pemohon->pekerjaan}}</td>
	</tr>
</table>
<h4>Data Permohonan</h4>
<table class="table table-striped">
	<tr>
		<td>Jenis Pelayanan</td>
		<td>{{$data->pelayanan->jenis_pelayanan}}</td>
	</tr>
	<tr>
		<td>Alasan Permohonan</td>
		<td>{{$data->alasan}}</td>
	</tr>
	<tr>
		<td>Jenis Pemohon</td>
		<td>{{$data->jenis_pemohon}}</td>
	</tr>
	<tr>
		<td>Area Pelayanan</td>
		<td>{{$data->letak_pohon}}</td>
	</tr>
	<tr>
		<td>Tanggal Permohonan</td>
		<td>{{tgl_indo1($data->tgl_permohonan)}}</td>
	</tr>
	<tr>
		<td>Nomor Permohonan</td>
		<td>{{$data->no_permohonan}}</td>
	</tr>
	<tr>
		<td>File IMB</td>
		<td><a href="{{asset('storage'.str_replace('public', '' ,$data->scan_imb))}}" target="_blank">Link File</a></td>
	</tr>
	<tr>
		<td>File Izin Usaha</td>
		<td><a href="{{asset('storage'.str_replace('public', '' ,$data->scan_izin_usaha))}}" target="_blank">Link File</a></td>
	</tr>
	<tr>
		<td>File Izin Penyambungan Jalan Masuk</td>
		<td><a href="{{asset('storage'.str_replace('public', '' ,$data->scan_izin_penyambungan_jalan_masuk))}}" target="_blank">Link File</a></td>
	</tr>
</table>