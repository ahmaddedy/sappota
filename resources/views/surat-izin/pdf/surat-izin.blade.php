<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Surat Izin</title>
	<style type="text/css">
		table.a td {
			padding: 3px;
		}
	</style>
</head>
<body style='font-family: "Times New Roman", Times, serif;'>
	<p align="center" style="margin-bottom:0; font-size: 20px;"><b>IZIN KEPALA DINAS LINGKUNGAN HIDUP</b></p>
	<p align="center" style="margin:0px 0px 10px 0px; font-size: 17px;">NOMOR : {{$data->no_surat}}</p>
	<p align="center" style="margin:0px 0px 10px 0px; font-size: 17px;">TENTANG</p>
	<p align="center" style="margin:0px 0px 10px 0px; font-size: 20px;">IZIN PENEBANGAN POHON</p>
	<table class="a" width="90%" border="0" style="text-align: justify; margin: 20px 0px 0px 0px; padding-left: 50px">
		<tr>
			<td width="50px" valign="top">Dasar</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">a.</td>
			<td align="">Peraturan Daerah No. 3 Tahun 2014 tentang Penataan dan Pengelolaan  Ruang 
       Terbuka Hijau;</td>
		</tr>
		<tr>
			<td></td>
			<td width="5px"></td>
			<td width="8px" valign="top">b.</td>
			<td>Peraturan Walikota No. 71 Tahun 2019 tentang Penataan dan Pengelolaan  
     Ruang Terbuka Hijau di Kota Makassar;</td>
		</tr>
		<tr>
			<td></td>
			<td width="5px"></td>
			<td width="8px" valign="top">c.</td>
			<td>Peraturan Walikota Makassar No. 70 Tahun 2022 tentang tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Dinas Lingkungan Hidup.</td>
		</tr>
	</table>
	<p style="padding-left: 50px; margin-bottom: 0px">Memberi Izin Kepada:</p>
	<table width="90%" border="0" style="text-align: justify; margin: 20px 0px 0px 0px; padding-left: 50px">
		<tr>
			<td width="20px" valign="top">Nama</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">................................</td>
		</tr>
		<tr>
			<td width="20px" valign="top">Jabatan</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">................................</td>
		</tr>
		<tr>
			<td width="20px" valign="top">Unit Kerja</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">................................</td>
		</tr>
		<tr>
			<td width="20px" valign="top">Untuk</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">
				Melakukan {{$data->permohonan->pelayanan->jenis_pelayanan}} Pohon Sebagai berikut : <br>
				<ol type="a">
					<li>Jumlah dan Jenis Pohon: <br>
					{{$data->permohonan->jenis_pohon}} {{$data->permohonan->jumlah_pohon}} dengan diameter {{$data->permohonan->diameter_pohon}}<br></li>
					<li>Lokasi Pohon: {{$data->permohonan->alamat_pohon}} {{$data->permohonan->kel->nama}}</li>
				</ol>
			</td>
		</tr>
		<tr>
			<td width="20px" valign="top">Dengan Kompensasi</td>
			<td width="5px" valign="top">:</td>
			<td width="8px" valign="top">
				<ol type="a">
					<li>Jumlah Pohon: {{$data->permohonan->jumlah_pohon_pengganti}} </li>
					<li>Jenis Pohon: {{$data->permohonan->jenis_pohon_pengganti}}</li>
				</ol>
			</td>
		</tr>
	</table>
	<table align="right" border="0" width="50%" style="margin-top: 20px;">
		<tr>
			<td>Ditetapkan di Makassar</td>
		</tr>
		<tr>
			<td>Pada Tanggal {{tgl_indo1($data->tgl_surat)}}</td>
		</tr>
		<tr>
			<td style="padding-top: 20px"><b>KEPALA DINAS,</b></td>
		</tr>
		<tr>
			<td style="padding-top: 70px">
				<b><u>FERDI, S.Pt., M.Sc., Ph.D</u></b><br>
				Pangkat: Pembina <br>
				NIP. 19731216 200212 1 003
			</td>
		</tr>
	</table>
</body>
</html>