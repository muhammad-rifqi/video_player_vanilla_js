<?php
$lokasi_file = $_FILES['video']['tmp_name'];
$nama_file = $_FILES['video']['name'];
$exp = explode(".",$nama_file);
$ext = end($exp);
$changeName = time().'.'.$ext;
$upload = move_uploaded_file($lokasi_file,'berkas/'.$changeName);
if($upload){
    echo json_encode(array("success"=>"true"));
}else{
    echo json_encode(array("success"=>"false"));
}


?>