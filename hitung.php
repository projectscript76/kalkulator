<?php
	$angka = $_POST['angka'];
	$angka2 = $_POST['angka2'];
	$operator = $_POST['operator'];
	if ($operator == '+')
		{
		$hasil = $angka+$angka2;
		}
	if ($operator == '-')
		{
		$hasil = $angka-$angka2;
		}
	if ($operator == '*')
		{
		$hasil = $angka*$angka2;
		}
	if ($operator == '/')
		{
		$hasil = $angka/$angka2;
		}
	print "$hasil";
?>