<?php
include("koneksi.php"); 

$act=$_GET['act'];

if ($act=='delete'){
	$id_atasan=$_GET['id_atasan'];
	$sql="DELETE FROM atasan WHERE id_atasan = '$id_atasan'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:atasan.php');
}

elseif ($act=='input'){
	$ID_ATASAN = $_POST["ID_ATASAN"];
	$JABATAN = $_POST["JABATAN"];
 	$NAMA_ATASAN = $_POST["NAMA_ATASAN"];

   $sql="insert into atasan values ('$ID_ATASAN','','$JABATAN','$NAMA_ATASAN','') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:atasan.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$ID_ATASAN = $_POST["id_atasan"];
	$JABATAN = $_POST["jabatan"];
 	$NAMA_ATASAN = $_POST["nama_atasan"];
	

	$sql = "UPDATE atasan SET NAMA_ATASAN='$NAMA_ATASAN', JABATAN='$JABATAN' WHERE ID_ATASAN='$ID_ATASAN'";

	 $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   if($prepare)
	{
	header('location:atasan.php');
	}
	else {echo "gagal";}
   



}
?>
