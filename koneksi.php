<?php 
 
//membangun koneksi 
$username="indra_943";
$password="indra_943";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

$hari_ini = date("dmY");

if (!$koneksi) { 
$erroci_error ();

echo "Gagal tersambung ke ORACLE";

} else{
//echo "koneksi berhasil";

}

?>