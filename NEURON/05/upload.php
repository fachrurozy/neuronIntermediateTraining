<?php
$fileSize = $_FILES['file']['size'];
$type = mime_content_type($_FILES['file']['tmp_name']);
$fileName = md5(date('Y-m-d H:i:s')).$_FILES['file']['name'];

// check ukuran file

// validasi type

if($fileSize>500000){
    echo "Ukuran File Terlalu Besar";
    die();
}

if(in_array($type, ['image/jpg', 'image/png', 'image/jpeg'])){
    move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$fileName);
    echo "OK";
}else{
    echo "Silahkan pilih ekstensi yang benar";
}
?>