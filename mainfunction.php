<?php

function tanggal_indo($date)
{
	$bulan = array (1 =>   'Januari',
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ba74732739cef848085e043409b2274c85d528be
	$hari = array (
			'Minggu',		
			'Senin',
			'Selasa',
			'Rabu',
			'Kamis',
			'Jumaat',
			'Sabtu'
			);
	$split = explode('-', $date);
	return $hari[ (int)$split[2] ] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

function linkPts($calDay, $class)
{
<<<<<<< HEAD
	$checkLink = $call->query("SELECT * FROM soal WHERE day = '$calDay'")->fetch_assoc();
	$thisLink = [
		'label' => $checkLink['label'];
		'link' => $checkLink['link'];
	];
	return $thisLink;
=======
	$checkLink = $call->query("SELECT * FROM soal WHERE day = '$calDay' AND class = '$class'")->fetch_assoc();
	$thisLink = [
		'label' => $checkLink['label'];
		'link' => $checkLink['desc'];
	];
	return $thisLink;
=======
	$split = explode('-', $date);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

function linkPts()
{
    
>>>>>>> 381dd0bd9b0c5b27d2485a524c8dc87b56dcc9bf
>>>>>>> ba74732739cef848085e043409b2274c85d528be
}