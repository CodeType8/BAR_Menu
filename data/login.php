<?php
$id = $_POST['id'];
$pw = $_POST['pw'];

//admin     dkssudgktpdy**
//binex     3eyblqr
//costco    dfohgu589
if (($id == 'admin' && $pw == 'dkssudgktpdy**') || ($id == 'binex' && $pw == '3eyblqr') || ($id == 'costco' && $pw == 'dfohgu589')) {
    session_start();
    $_SESSION['vis_costco_login'] = 1;
    $_SESSION['id'] = $id;
    $_SESSION['timezone'] = $_POST['timezone'];
    echo 'success';
} else echo 'no';