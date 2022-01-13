<?php
include("koneksi.php");
$hari_ini = date("dmY");

$act=$_GET['act'];

if ($act=='input'){
echo	$id_karyawan = $_POST['id_karyawan'];
echo	$id_atasan = $_POST['id_atasan'];
echo	$no_registrasi = $_POST['no_registrasi'];
echo	$hari = $_POST['hari'];

	$sql = "INSERT INTO pengajuan VALUES ('','$id_karyawan','$id_atasan','no_registrasi', '$hari', '$hari_ini')";
	$prepare = ociparse($koneksi, $sql);
    ociexecute($prepare);
    oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:laporan.php');
	}
	else {echo "gagal";} 

}

?>
