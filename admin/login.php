<?php
$id = $_POST['id'];
$pw = $_POST['pw'];

//admin     123456
if (($id == 'admin' && $pw == '123456')) {
    session_start();
    $_SESSION['codebarmenu'] = 1;
    $_SESSION['id'] = $id;
    $_SESSION['timezone'] = $_POST['timezone'];
    echo 'success';
} else echo 'no';