<?php
	$angka = $_POST['angka'];
	$operator = $_POST['operator'];
	if ($operator == 'abs')
		{
		$hasil = abs($angka);
		}
	if ($operator == 'floor')
		{
		$hasil = floor($angka);
		}
	if ($operator == 'round')
		{
		$hasil = round($angka);
		}
	if ($operator == 'decbin')
		{
		$hasil = decbin($angka);
		}
	if ($operator == 'bindec')
		{
		$hasil = bindec($angka);
		}
	if ($operator == 'decoct')
		{
		$hasil = octdec($angka);
		}
	if ($operator == 'octdec')
		{
		$hasil = octdec($angka);
		}
	if ($operator == 'dechex')
		{
		$hasil = dechex($angka);
		}
	if ($operator == 'hexdec')
		{
		$hasil = hexdec($angka);
		}
	if ($operator == 'sin')
		{
		$hasil = sin($angka);
		}
	if ($operator == 'cos')
		{
		$hasil = cos($angka);
		}
	if ($operator == 'tan')
		{
		$hasil = tan($angka);
		}
	if ($operator == 'log')
		{
		$hasil = log($angka);
		}
	if ($operator == 'sqrt')
		{
		$hasil = sqrt($angka);
		}
	print "$hasil";
?>