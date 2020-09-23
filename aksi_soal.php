<?php
<<<<<<< HEAD
require 'mainconnect.php';

date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '1024M');
$date = date("Y-m-d");
$time = date("H:i:s");


function tanggal_indo($date, $cetak_hari = false)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$hari = array(
		1 =>    'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);
	$split = explode('-', $date);
	$tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($date));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

$kalender = tanggal_indo($date, true);
$expCall = explode(', ', $kalender);
$calDay = $expCall[0];

// $checkLink = $call->query("SELECT * FROM soal WHERE day = 'Kamis'");

// while ($row = $checkLink->fetch_assoc()) {
// 	$response[] = [
// 		'nama' => $row['label'],
// 		'url' => $row['link']
// 	];
// }
// $link = $response[0]['url'];
// print_r($link);


// $kalender = tanggal_indo($date);
// $expCall = explode(' ', $kalender);
// $calDay = $expCall[0];

// $class = 7;

// $soalPts = linkPts($calDay);
// $labelPts = $soalPts['label'];
// $linkPts = $soalPts['link'];

// var_dump($soalPts);
=======
$kalender = tanggal_indo($date);
$expCall = explode(' ',$kalender);
$calDay = $expCall[0];

$class = 7;

$soalPts = linkPts($calDay, $class)
$labelPts = $soalPts['label'];
$linkPts = $soalPts['link'];
?>
>>>>>>> ba74732739cef848085e043409b2274c85d528be
