<?php
include("views/$view.php");
     $view = isset($_GET['view'])?$_GET['view']:'trang-chu';
    //echo $view; die;
     switch ($view) {
         case 'details':
            include('public/details.php');
             break;
         case 'register':
             include('public/regiter.php');
             break;
         case 'login':
             include('public/login.php');
            break;
         case 'dang-xuat':
             include('views/dangxuat.php');
             break;
         case 'lien-he':
             include('views/lienhe.php');
             break;
         case 'loaitin':
            include('views/loaitin.php');
             break;
         case 'gioithieu':
             include('views/gioithieu.php');
            break;
         case 'admin':
             include('views/admin.php');
             break;

         case 'binhluan':
             include('views/binhluan.php');
             break;
         case 'doanhthu':
             include('views/doanhthu.php');
             break;
         case 'themSP':
             include('views/themSP.php');
             break;
         case 'capnhatSP':
             include('views/capnhatSP.php');
            break;
         case 'qlyDMSP':
             include('views/qlyDMSP.php');
             break;
         case 'capnhatDMSP':
             include('views/capnhatDMSP.php');
            break;
         case 'themDMSP':
             include('views/themDMSP.php');
            break;
         case 'xoaDMSP':
             include('views/xoaDMSP.php');
            break;
          case 'xoaSP':
             include('views/xoaSP.php');
            break;
         case 'qlyNhaCC':
             include('views/qlyNhaCC.php');
            break;
         case 'xoaNCC':
             include('views/xoaNCC.php');
            break;
         case 'themNCC':
             include('views/themNCC.php');
            break;
         case 'giohang':
             include('views/giohang.php');
            break;
         case 'checkout':
             include('views/checkout.php');
            break;
         case 'message':
             include('views/message.php');
            break;
	defaut:
	die("Not controller");
	break;
}
?>
