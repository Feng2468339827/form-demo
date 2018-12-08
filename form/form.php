<?php
	header('Content-Type: text/plain; charset=utf-8');
    var_dump($_FILES);
	$imgname = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = './image';
    if(move_uploaded_file($tmp,"$filepath/$imgname")){
        echo "上传成功";
    }else{
        echo "上传失败";
    }
?>