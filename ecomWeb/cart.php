<?php

include('controller/c_thuoc.php');
$home = new C_thuoc;
$trang_chu = $home->getGiohang();
?>