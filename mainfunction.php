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
	$checkLink = $call->query("SELECT * FROM soal WHERE day = '$calDay'")->fetch_assoc();
	$thisLink = [
		'label' => $checkLink['label'];
		'link' => $checkLink['link'];
	];
	return $thisLink;
}