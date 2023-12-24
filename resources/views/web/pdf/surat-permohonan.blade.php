<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
	<p align="center"><b>FORMULIR PERMOHONAN</b></p>
	<P align="center"><b>IZIN {{strtoupper($data->pelayanan->jenis_pelayanan)}} POHON</b></P>
	<p align="center" style="margin-bottom: 50px;">Nomor : {{$data->no_permohonan}}</p>

	<table width="100%" border="0" style="margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
		<tr>
			<td width="155px;">Nama</td>
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
		<tr>
			<td>No. HP/Telepon</td>
			<td>:</td>
			<td>{{$data->pemohon->telp}}</td>
		</tr>
	</table>
	<p style="margin-left: 50px;">Dengan ini mengajukan perohonan izin {{strtolower($data->pelayanan->jenis_pelayanan)}} pohon terhadap: </p>
	<table  width="100%" border="0" style="margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
		<tr>
			<td>Jenis dan Jumlah Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->jenis_pohon))}} {{$data->jumlah_pohon}} buah</td>
		</tr>
		<tr>
			<td>Lokasi Pohon</td>
			<td>:</td>
			<td>{{ucwords(strtolower($data->alamat_pohon))}} {{ucwords(strtolower($data->kel->nama))}}</td>
		</tr>
		<tr>
			<td>Alasan</td>
			<td>:</td>
			<td>{{$data->alasan}}</td>
		</tr>
	</table>

	<table align="right" style="margin-right: 100px;">
		<tr>
			<td>Makassar, {{tgl_indo1($data->tgl_permohonan)}}</td>
		</tr>
		<tr>
			<td>Pemohon</td>
		</tr>

		<tr>
			<td height="220px;">({{strtoupper($data->pemohon->nama)}})</td>
		</tr>
	</table>
</body>
</html>