<?php 
$scan = scandir('berkas'); 
$data = array(
    "data" => $scan
);
echo json_encode($data);
?>