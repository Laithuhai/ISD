<?php
include('BaseController.php');
include('model/m_thuoc.php');
class C_thuoc extends BaseController{

	 function index()  
	{
		
		$m_thuoc = new M_thuoc();
		$slide = $m_thuoc->getSlide();
		$menu=$m_thuoc->getMenu();
		$new_product=$m_thuoc->getNewProduct();
		$top_product = $m_thuoc->getTopProduct();
		
		$arrayName = array('slide'=>$slide,'menu'=>$menu,'new_product'=>$new_product,'top_product'=>$top_product);
		return $this->loadView('index',$arrayName);
	}

	function loaithuoc(){
		$id_loai = $_GET['id_loai'];
		$m_thuoc = new M_thuoc();
		$thuoc = $m_thuoc->getThuocByIdloai($id_loai);
		$menu = $m_thuoc-> getMenu();
		$loai=array('danhmucthuoc' => $thuoc,'menu'=>$menu );
		return $this->loadView('loaitin',$loai);
	} 

	function chitietTin(){
		$m_thuoc = new M_thuoc();
		$id_tin=$_GET['id_tin'];
		$alias = $_GET['loai_tin'];
		$menu = $m_thuoc-> getMenu();
		$chitietTin =$m_thuoc->getChitietTin($id_tin);
		$comment= $m_thuoc->getComment($id_tin);
		$relatednews = $m_thuoc->getRelatedNews($alias);
		$tinnoibat=$m_thuoc-> getTinNoibat();
		$tin= array('chitietTin'=>$chitietTin,'comment'=>$comment,'relatednews'=>$relatednews,'tinnoibat'=>$tinnoibat,'menu'=>$menu);
		return $this->loadView('chitiet',$tin);
	}

	function them_binh_luan($id_user,$id_tin,$noidung){
		$m_thuoc = new M_thuoc();
		$thuoc= $m_thuoc->addComment($id_user,$id_tin,$noidung);
		header("location:".$_SERVER['HTTP_REFERER']);
	}

	 function danhsachSanpham(){
	     $id_tin = $_GET['id_tin'];
	     $m_thuoc = new M_thuoc();
	     $danhsachSanpham = $m_thuoc->getSanpham($data);
	     return array('danhsachSanpham'=>$danhsachSanpham);
    }

	function chitietdon(){

	     $id_donhangnhap=$_GET['id_donhangnhap'];
	     $m_thuoc = new M_thuoc();
	     $chitiethangnhap=$m_thuoc->getChitietdonhangnhap($id_donhangnhap);
	     return array('chitiethangnhap'=>$chitiethangnhap,);
    }

	function getGiohang(){
		if(isset($_GET['id'])){	
			$id = $_GET['id'];
			$m_thuoc = new M_thuoc();
			$thuoc = $m_thuoc->getProductById($id);
			$menu = $m_thuoc-> getMenu();
			$allThuoc = $m_thuoc->getAllProduct();
			$giohang=array('chitietthuoc' => $thuoc,'menu'=>$menu, 'allThuoc'=>$allThuoc);
			return $this->loadView('giohang',$giohang);
		}
	} 

	function getCheckout(){
		$m_thuoc = new M_thuoc();
		$menu = $m_thuoc-> getMenu();
		$allThuoc = $m_thuoc->getAllProduct();
		$checkout=array('menu'=>$menu, 'allThuoc'=>$allThuoc);
		return $this->loadView('checkout',$checkout);
	}

	function getMessage(){
		$m_thuoc = new M_thuoc();
		$menu = $m_thuoc-> getMenu();
		$allThuoc = $m_thuoc->getAllProduct();
		$message=array('menu'=>$menu, 'allThuoc'=>$allThuoc);
		return $this->loadView('message',$message);
	}

	function getThanhtoan(){
	     if (isset($_GET['id'])){
	         $id = $_GET['id'];
	         $m_thuoc = new M_thuoc();

         }
    }
	function timkiem($key){
		$m_thuoc = new M_thuoc();
		$tin = $m_thuoc->search($key);
		return $tin;
	}
}

?>