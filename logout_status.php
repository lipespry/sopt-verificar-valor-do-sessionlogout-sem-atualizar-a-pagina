<?php
//session_start();
//$_SESSION['logout'] = 'on';
if (!empty($_SESSION['logout']))
    echo json_encode(
        array('logout' => $_SESSION['logout'])
    );
else
    echo json_encode(
        array('logout' => null)
    );