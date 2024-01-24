<h4>Data Pemohon</h4>
<table class="table table-striped">
	<tr>
		<td width="50%">NIK</td>
		<td width="50%">{{$data->pemohon->nik}}</td>
	</tr>
	<tr>
		<td width="50%">Nama Pemohon</td>
		<td width="50%">{{$data->pemohon->nama}}</td>
	</tr>
	<tr>
		<td width="50%">Pekerjaan</td>
		<td width="50%">{{$data->pemohon->pekerjaan}}</td>
	</tr>
	<tr>
		<td width="50%">Alamat</td>
		<td width="50%">{{$data->pemohon->alamat}}</td>
	</tr>
	<tr>
		<td width="50%">Email</td>
		<td width="50%">{{$data->pemohon->email}}</td>
	</tr>
	<tr>
		<td width="50%">No Telepon</td>
		<td width="50%">{{$data->pemohon->telp}}</td>
	</tr>
</table>
<h4>Data Permohonan</h4>
<table class="table table-striped">
	<tr>
		<td width="50%">Jenis Pelayanan</td>
		<td width="50%">{{$data->pelayanan->jenis_pelayanan}}</td>
	</tr>
	<tr>
		<td width="50%">Alasan Permohonan</td>
		<td width="50%">{{$data->alasan}}</td>
	</tr>
	<tr>
		<td width="50%">Jenis Pemohon</td>
		<td width="50%">{{$data->jenis_pemohon}}</td>
	</tr>
	<tr>
		<td width="50%">Area Pelayanan</td>
		<td width="50%">Area {{$data->letak_pohon}}</td>
	</tr>
	<tr>
		<td width="50%">Tanggal Permohonan</td>
		<td width="50%">{{tgl_indo1($data->tgl_permohonan)}}</td>
	</tr>
	<tr>
		<td width="50%">Nomor Permohonan</td>
		<td width="50%">{{$data->no_permohonan}}</td>
	</tr>
	<tr>
		<td width="50%">File IMB</td>
		<td width="50%">
			@if ($data->scan_imb != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->scan_imb))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
	<tr>
		<td width="50%">File Izin Usaha</td>
		<td width="50%">
			@if ($data->scan_izin_usaha != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->scan_izin_usaha))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
	<tr>
		<td width="50%">File Izin Penyambungan Jalan Masuk</td>
		<td width="50%">
			@if ($data->scan_izin_penyambungan_jalan_masuk != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->scan_izin_penyambungan_jalan_masuk))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
	<tr>
		<td width="50%">File Gambar Letak Pohon/Site Plan</td>
		<td width="50%">
			@if ($data->gambar_letak_pohon_site_plan != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->gambar_letak_pohon_site_plan))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
</table>
<h4>Data Pohon</h4>
<table class="table table-striped">
	<tr>
		<td width="50%">Nama Pohon</td>
		<td width="50%">{{$data->nama_pohon}}</td>
	</tr>
	<tr>
		<td width="50%">Alamat Pohon</td>
		<td width="50%">{{$data->alamat_pohon}} @if ($data->kelurahan != null) {{ucwords(strtolower($data->kel->nama))}} @endif</td>
	</tr>
	<tr>
		<td width="50%">Jumlah Pohon</td>
		<td width="50%">{{$data->jumlah_pohon}}</td>
	</tr>
	<tr>
		<td width="50%">Jenis Pohon</td>
		<td width="50%">{{$data->jenis_pohon}}</td>
	</tr>
	<tr>
		<td width="50%">Diameter Pohon</td>
		<td width="50%">{{$data->diameter_pohon}}</td>
	</tr>
	<tr>
		<td width="50%">File Gambar Pohon</td>
		<td width="50%">
			@if ($data->gambar_pohon != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->gambar_pohon))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
</table>
<h4>Data Pohon Pengganti/Kompensasi</h4>
<table class="table table-striped">
	<tr>
		<td width="50%">Jumlah Pohon Pengganti</td>
		<td width="50%">{{$data->jumlah_pohon_pengganti}}</td>
	</tr>
	<tr>
		<td width="50%">Jenis Pohon Pengganti</td>
		<td width="50%">{{$data->jenis_pohon_pengganti}}</td>
	</tr>
	<tr>
		<td width="50%">Lokasi Pohon Pengganti</td>
		<td width="50%">{{$data->lokasi_pohon_pengganti}}</td>
	</tr>
</table>
<h4>Surat Permohonan dan Surat Pernyataan Memenuhi Kewajiban Kompensasi</h4>
<table class="table table-striped">
	<tr>
		<td width="50%">File Surat Permohonan</td>
		<td width="50%">
			@if ($data->surat_permohonan != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->surat_permohonan))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
	<tr>
		<td width="50%">File Surat Pernyataan</td>
		<td width="50%">
			@if ($data->surat_pernyataan != null)
				<a href="{{asset('storage'.str_replace('public', '' ,$data->surat_pernyataan))}}" target="_blank">Link File</a>
			@else
				Tidak ada file
			@endif
		</td>
	</tr>
</table>
<h4>History Permohonan</h4>
<table class="table table-striped">
	<tr>
		<th>Status Pengajuan</th>
		<th>Tanggal Update Status</th>
		<th>Posisi</th>
		<th>Nama Verifikator</th>
		<th>Catatan Verifikator</th>
	</tr>
	@foreach ($data->history as $h)
		<tr>
			<td>{{$h->status->nama_status}}</td>
			<td>{{$h->tgl_update}}</td>
			<td>{{$h->posisi}}</td>
			<td>@if($h->verifikator != null) {{$h->petugas->nama}} @endif</td>
			<td>{!! $h->catatan !!}</td>
		</tr>
	@endforeach
</table>