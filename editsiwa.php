<?php

//update dari git hub
//by irvan kurniansyah

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$siswa = new Siswa();

print'<pre>';
print_r($_FILES);
print'</pre>';

if(!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.png')){
	exit('error upload File');
}

$data['input_name'] = $_POST['in_nama'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto'] = 'img/ '.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data siswa Berhasil di update <br />";
echo "<a href = 'siswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>"

?>
