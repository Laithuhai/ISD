<?php

class BaseController{

	function loadView($view,$data=array()){
		include("public/pages/index.html");
	}

}

?>