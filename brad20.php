<?php
$upload = $_FILES["upload"];
if ($upload['error']==0) {
    if (copy($upload['tmp_name'], "./upload/{$upload['name']}")) {
        echo 'Upload OK';
    } else {
        echo 'Copy Fail';
    }
}else{
    echo 'Upload Fail';
}
