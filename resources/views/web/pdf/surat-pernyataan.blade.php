<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
	<p align="center"><b>SURAT PERNYATAAN</b></p>
	<p align="center"><b>KESEDIAAN MELAKSANAKAN KEWAJIBAN KOMPENSASI</b></p>
	<p align="center" style="margin-bottom: 30px;"><b>ATAS IZIN PENEBANGAN POHON</b></p>

	<p style="margin-left: 50px;">Saya yang bertanda tangan dibawah ini:</p>
	<table width="100%" border="0" style="margin-left: 50px; margin-right: 50px; margin-bottom: 30px;">
		<tr>
			<td width="155px;">Nama Pemohon</td>
			<td>:</td>
			<td>{{$data->pemohon->nama}}</td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td>:</td>
			<td>{{$data->nik}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$data->pemohon->pekerjaan}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$data->pemohon->alamat}}</td>
		</tr>
	</table>
	<p style="margin-left: 50px; text-align: justify; margin-right: 30px;">Menyatakan BERSEDIA melaksanakan kewajiban kompensasi atas izin penebangan pohon, dengan uraian sebagai berikut : </p>
	<table  width="100%" border="0" style="margin-left: 50px; margin-right: 50px; margin-bottom: 30px;">
		<tr>
			<td>Jenis Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->jenis_pohon))}}</td>
		</tr>
		<tr>
			<td>Diameter Pohon</td>
			<td>:</td>
			<td>{{$data->diameter_pohon}}</td>
		</tr>
		<tr>
			<td>Jumlah Pohon</td>
			<td>:</td>
			<td>{{$data->jumlah_pohon}} buah</td>
		</tr>
		<tr>
			<td>Lokasi Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->alamat_pohon))}} {{ucwords(strtolower($data->kel->nama))}}</td>
		</tr>
		<tr>
	</table>
	<p style="margin-left: 50px; text-align: justify; margin-right: 30px;">Berdasarkan ketentuan dalam Peraturan Walikota Nomor 71 Tahun 2019 tentang Penataan dan Pengelolaan RTH di Kota Makassar, maka kewajiban kompensasi atas penerbitan izin penebangan pohon berupa : </p>
	<table  width="100%" border="0" style="margin-left: 50px; margin-right: 50px; margin-bottom: 30px;">
		<tr>
			<td width="305px">Jenis Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->jenis_pohon_pengganti))}}</td>
		</tr>
		<tr>
			<td>Jumlah Pohon</td>
			<td>:</td>
			<td>{{$data->jumlah_pohon_pengganti}} buah</td>
		</tr>
		<tr>
			<td>Rencana Lokasi Penanaman Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->lokasi_pohon_pengganti))}}</td>
		</tr>
		<tr>
	</table>
	<p style="margin-left: 50px; margin-bottom: 30px;  text-align: justify; margin-right: 30px;">Demikian pernyataan ini dibuat dengan penuh kesadaran tanpa adanya tekanan dan paksaan dari pihak manapun. </p>
	<table align="left" style="margin-left: 50px;">
		<tr>
			<td>Makassar, {{tgl_indo1($data->tgl_permohonan)}}</td>
		</tr>
		<tr>
			<td>Yang Menyatakan</td>
		</tr>
		<tr>
			<td height="220px;">({{strtoupper($data->pemohon->nama)}})</td>
		</tr>
	</table>
</body>
</html>