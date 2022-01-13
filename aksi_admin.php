<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_admin=$_GET['id_admin'];
	$sql="DELETE FROM admin_ga WHERE id_admin = '$id_admin'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:admin.php');
}

elseif ($act=='input'){
	$id_admin=$_POST["id_admin"];
	$nama_admin = $_POST["nama_admin"];
 	$NO_HP = $_POST["no_hp"];

   $sql="insert into admin_ga values ('$id_admin','','$nama_admin','$NO_HP') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
		    
	header('location:admin.php');
	
	}
	
	else {echo "gagal";}

}


elseif ($act=='update'){
	$ID_ADMIN = $_POST["ID_ADMIN"];
	$NAMA_ADMIN = $_POST["NAMA_ADMIN"];
 	$NO_HP = $_POST["NO_HP"];

	$sql = "UPDATE admin_ga SET NAMA_ADMIN='$NAMA_ADMIN', NO_HP ='$NO_HP' WHERE ID_ADMIN='$ID_ADMIN'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	header('location:admin.php');
	}
	else {echo "gagal";}

}
?>
