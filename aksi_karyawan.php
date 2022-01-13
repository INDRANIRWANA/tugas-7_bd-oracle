<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_karyawan=$_GET['id_karyawan'];
	$sql="DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:karyawan.php');
}

elseif ($act=='input'){
	$id_karyawan=$_POST["id_karyawan"];
	$nama_karyawan = $_POST["nama_karyawan"];
 	$NO_HP = $_POST["no_hp"];

   $sql="insert into karyawan values ('$id_karyawan','$nama_karyawan','$NO_HP') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:karyawan.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_karyawan = $_POST["id_karyawan"];
	$nama_karyawan = $_POST["nama_karyawan"];
 	$no_hp = $_POST["no_hp"];

	$sql = "UPDATE karyawan SET NAMA_KARYAWAN='$nama_karyawan',no_hp='$no_hp' WHERE ID_KARYAWAN='$id_karyawan'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	header('location:karyawan.php');
	}
	else {echo "gagal";}

}
?>
