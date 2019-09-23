<?php
include('database.php');
class M_thuoc extends database{
	function getSlide()
	{
		$sql="SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
//đổ bảng danh mục sản phẩm lên trên thanh menu sản phẩm
	function getMenu(){
		$sql="SELECT TenDM,MaDM FROM danhmucsanpham";
		$this->setQuery($sql);
		return $this->loadAllRows();

	}

	function getNewProduct(){
		$sql="SELECT * FROM sanpham WHERE MaNhaCC=2";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getTopProduct(){
		$sql="SELECT * FROM sanpham WHERE MaNhaCC=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	//từ loại thuốc hienr thị tất cả các loại thuốc
	function getThuocByIdloai($id_loai){
		$sql ="SELECT * FROM sanpham WHERE MaDM = $id_loai";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));

	} 

	function getChitietTin($id){
		$sql ="SELECT * FROM sanpham WHERE MaSP = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	function getComment($id_tin){
		$sql= "SELECT * FROM comment where idTinTuc=$id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}

	function getRelatedNews($alias){
		$sql="SELECT sp.*, dmsp.TenDM as TenDM,dmsp.MaDM as idLoaitin FROM sanpham sp INNER JOIN danhmucsanpham dmsp ON sp.MaDM=dmsp.MaDM WHERE dmsp.TenDM='$alias' limit 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows(array($alias));
	}

	function getTinNoibat(){
		$sql="SELECT sp.*, dmsp.TenDM as TenDM,dmsp.MaDM as idLoaitin FROM sanpham sp INNER JOIN danhmucsanpham dmsp ON sp.MaDM=dmsp.MaDM WHERE sp.NoiBat=1 limit 0,5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getCreateProduct(){
		$sql="INSERT INTO sanpham(MaSP, TenSP, Dongiacu, Dongianhap, Giabanmoi, Soluongton, Soluongnhap, Mieuta, Hinhanh, MaDM, MaNhaCC, Mucdophanhoi, Tinhtrang) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function addComment($id_user,$id_tin,$noidung){
		$sql="INSERT INTO comment(idUser,idTinTuc,NoiDung) VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($id_user,$id_tin,$noidung));
	}

	function getProductById($id){
		$sql="SELECT * FROM sanpham WHERE MaSP=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	function getAllProduct(){
		$sql="SELECT * FROM sanpham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function search($key){
		$sql = "SELECT sp.*,dmsp.TenDM as TenDM from sanpham sp inner join danhmucsanpham dmsp on dmsp.MaDM = sp.MaSP where TenSP like '%$key%' or Mieuta like '%$key%'";
		$this->setQuery($sql);
		return $this->loadAllRows(array($key));
	}
}
?>