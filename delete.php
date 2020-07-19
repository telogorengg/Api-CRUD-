<?php
include ("koneksi.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];

    $query = "DELETE FROM tbl_laundry WHERE id = '$id' ";
    $exeQuery = mysqli_query($konek,$query);

    echo($query) ? json_encode(array('kode'=> 1,'pesan'=>'berhasil menghapus data'))
    : json_encode(array('kode' => 2, 'pesan'=>'data gagal dihapus'));
}else{
    echo json_encode(array('kode'=>101 , 'pesan'=>'requst invalid'));
}

?>