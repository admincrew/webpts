<?php

function tanggal_indo($date)
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
		'Minggu',
		'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumaat',
		'Sabtu'
	);
	$split = explode('-', $date);
	return $hari[(int)$split[2]] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}
