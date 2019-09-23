<?php

include('model/m_user.php');
include('BaseController.php');

/**
 * 
 */
class C_user extends BaseController
{
	public function getDangki(){
	return $this->loadView('register');
		}
	function dangkiTK($name,$email,$password)
	{
		$m_user= new M_user();
		$id_user = $m_user->dangki($name,$email,$password);
		if($id_user>0){
			$_SESSION['success']="Success!";
			header('location:login.php');
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
			}

			if(isset($_SESSION['login, please'])){
				unset($_SESSION['login,please']);
			}
		}
		else{
			$_SESSION['error']="Uncuccess";
			header('location:login.php');
		}
		

	 }
	 
	 public function getDangnhap(){
	return $this->loadView('dangnhap');
		}
	 public function dangnhapTK($email,$password){
		$m_user = new M_user();
		$user = $m_user->dangNhap($email,$password);
		
		if($user==true){
			$_SESSION['user_name'] = $user->name;
			$_SESSION['user_id'] =$user->id;
			$_SESSION['email'] = $user->email;
			
			if(isset($_SESSION['err()'])){
				unset($_SESSION['err']);
				
				if ($_SESSION['email']=='admin@gmail.com') {
					header('location:admin.php');
				}else{
					header('location:index');
				}
			}else{
				if ($_SESSION['email']=='admin@gmail.com') {
					header('location:admin.php');
				}else{
					header('location:index');
				}
			}	
		}else{
			$_SESSION['err']="Fail to login";
			header('location:login.php');
		}
	}


	function dangxuat(){
		session_destroy();
		header("location:index.php");
	}
}

?>