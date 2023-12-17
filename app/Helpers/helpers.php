<?php

function generateID($table, $id, $start)
{
    $number = DB::select("SELECT $id FROM $table ORDER BY $id DESC LIMIT 1");
    $numCount = count($number);
    if ($numCount < 1) {
        $newID = $start;
    } else {
        $newID = $number[0]->$id + 1;
    }
    return $newID;
}

function tgl_indo($tanggals)
{
    // 2014-08-24
    // 24-08-2014
    $tanggal = substr($tanggals, 8, 2);
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);

    return $tanggal . "-" . bulan($bulan) . "-" . $tahun;
}

function tgl_indo1($tanggals)
{
    // 2014-08-24
    // 24-08-2014
    $tanggal = substr($tanggals, 8, 2);
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);

    return $tanggal . " " . bulan($bulan) . " " . $tahun;
}

function tampil_bulan($tanggals) {
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);

    return bulan($bulan) . " " . $tahun;   
}

function hari($day)
{
    switch ($day) {
        case '1':
            return 'Senin';
            break;
        case '2':
            return 'Selasa';
            break;
        case '3':
            return 'Rabu';
            break;
        case '4':
            return 'Kamis';
            break;
        case '5':
            return 'Jumat';
            break;
        case '6':
            return 'Sabtu';
            break;
        case '7':
            return 'Minggu';
            break;
        default:
            return 'Hari Salah';
            break;
    }
}

function bulan($bulan)
{
    switch ($bulan) {

        case 1:
            return 'Januari';
            break;
        case 2:
            return 'Februari';
            break;
        case 3:
            return 'Maret';
            break;
        case 4:
            return 'April';
            break;
        case 5:
            return 'Mei';
            break;
        case 6:
            return 'Juni';
            break;
        case 7:
            return 'Juli';
            break;
        case 8:
            return 'Agustus';
            break;
        case 9:
            return 'September';
            break;
        case 10:
            return 'Oktober';
            break;
        case 11:
            return 'November';
            break;
        case 12:
            return 'Desember';
            break;
    }

}

function bulanSingkat($bulan)
{
    switch ($bulan) {

        case '01':
            return 'Jan';
            break;
        case '02':
            return 'Feb';
            break;
        case '03':
            return 'Mar';
            break;
        case '04':
            return 'Apr';
            break;
        case '05':
            return 'Mei';
            break;
        case '06':
            return 'Jun';
            break;
        case '07':
            return 'Jul';
            break;
        case '08':
            return 'Agu';
            break;
        case '09':
            return 'Sep';
            break;
        case '10':
            return 'Okt';
            break;
        case '11':
            return 'Nov';
            break;
        case '12':
            return 'Des';
            break;
    }

}

function inputTipeDate($tgl) {
    //01-01-2021
    $tanggal = substr($tgl, 0, 2);
    $bln = substr($tgl, 3, 2);
    $thn = substr($tgl, 6, 4);
    return $thn."-".$bln."-".$tanggal;
}

function tglForm($tanggals) {
    //01-01-2021
    $tanggal = substr($tanggals, 8, 2);
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);

    return $tanggal . "-" . $bulan . "-" . $tahun;
}

function getFormatData($tgl, $type)
{
    $bulan = date('m',strtotime($tgl));
    $dayweek = date('w',strtotime($tgl));
    $day = hari($dayweek);

    $tahun = date('Y',strtotime($tgl));
    $tanggal = date('d',strtotime($tgl));
    $bulan = bulan((int)$bulan);

    if ($type == 'bulan')
        return $bulan;
    elseif ($type == 'tahun')
        return $tahun;
    elseif ($type == 'tanggal')
        return $tanggal;
    elseif ($type == 'hari')
        return $day;
    return null;
}

function toTglIndo($tgl)
{
    $bulan = date('m',strtotime($tgl));
    $tahun = date('Y',strtotime($tgl));
    $tanggal = date('d',strtotime($tgl));
    $bulan = bulan($bulan);
    return $tanggal.' '.$bulan.' '.$tahun;
}

if (!function_exists('data_pemda')) {

    function data_pemda()
    {
        $data = \App\Models\DataPemda::where('is_aktif', 1)->first();
        if (!$data) {
            return new \App\Models\DataPemda;
        } else {
            return $data;
        }
    }
}

function simpanSurat($id, $nomor, $tgl, $nama, $file, $file2, $kd_user, $ket, $isi, $perihal, $jenis, $kd_skpd,$no_token)
{
    if(!is_null($kd_skpd))
        $kd_skpd = $kd_skpd;
    else
        $kd_skpd = 'NULL';
    DB::insert("insert into dt_surat (id, nomor_surat, tgl_surat, nama, file1, file2, kd_user, ket, isi_surat, perihal, jenis_surat, id_template, kd_skpd, no_token) values ('$id', '$nomor', '$tgl', '$nama', '$file', '$file2', '$kd_user', '$ket', '$isi', '$perihal', '$jenis', NULL, '$kd_skpd' , '$no_token')");
}

/*function simpanSurat($id, $nomor, $tgl, $nama, $file, $file2, $kd_user, $ket, $isi, $perihal, $jenis, $kd_skpd)
{
    DB::insert("insert into dt_surat (id, nomor_surat, tgl_surat, nama, file1, file2, kd_user, ket, isi_surat, perihal, jenis_surat, id_template, kd_skpd) values ('$id', '$nomor', '$tgl', '$nama', '$file', '$file2', '$kd_user', '$ket', '$isi', '$perihal', '$jenis', NULL, '$kd_skpd')");
}*/

function getUserSession()
{
    $jenis_user = session('jenis_user');
    $id = session('id_user');

    switch ($jenis_user) {
        case 'PA':
            $u = \App\Models\UserPa::find($id);            
            break;
        case 'KPA':
            $u = \App\Models\UserKpa::find($id);            
            break;
        case 'PPK':
            $u = \App\Models\UserPpk::find($id);            
            break;
        case 'PP':
            $u = \App\Models\UserPp::find($id);            
            break;        
        default:
            $u = null;
            break;
    }

    return $u;
}

function generateToken($id) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

    $randomString = '';
  
    for ($i = 0; $i < 13; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $id.$randomString;
}

function countPages($path) {
    $pdf = file_get_contents($path);
    $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
    return $number;
}  

function number_format_short( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'J';
    } else {
        // 0.9b-850b
        $n_format = number_format($n / 1000000000, $precision);
        $suffix = 'M';
    } 

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat( '0', $precision );
        $n_format = str_replace( $dotzero, '', $n_format );
    }

    return $n_format . $suffix;
}

function number_format_short1( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'J';
    } else if ($n < 900000000000) {
        // 0.9b-850b
        $n_format = number_format($n / 1000000000, $precision);
        $suffix = 'M';
    } else {
        // 0.9t+
        $n_format = number_format($n / 1000000000000, $precision);
        $suffix = 'T';
    }

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat( '0', $precision );
        $n_format = str_replace( $dotzero, '', $n_format );
    }

    return $n_format . $suffix;
}


?>
