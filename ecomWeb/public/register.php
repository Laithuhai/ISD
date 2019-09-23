<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
<!-- Bootstrap style --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="lib/themes/login.css">
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="lib/themes/images/ico/icon.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>



<div id="mainBody">
	<div class="container">
	<div class="row">

      <form  method="post" action="login.php">
        <div class= "col-md-2"></div>
        <div class= "col-md-8">
          <div class="row" style="margin:0px;  box-shadow: -1px 1px 50px 10px black;">
            <div class="col=md-6">
              <ul>
                <a href="?controller=pages&action=login" >Sign in</a>
                <a href="?controller=pages&action=register" class="active" style="border-bottom: 2px solid #f44c89; padding: 10px;">Sign up</a>
		</ul>
	
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			
			  <input class="form-control" name="fname" type="text" id="inputFname1" placeholder="First Name">
			
		 
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			
			  <input class="form-control" name="lname" type="text" id="inputLnam" placeholder="Last Name">
			
		 
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		
		  <input class="form-control" name="email" type="text" id="input_email" placeholder="Email">
			<label class="control-label" for="phone">Number phone </label>
			
			  <input class="form-control" type="text"  name="phone" id="phone" placeholder="phone"/>  
		<label class="control-label">Sex: <sup>*</sup></label>
		
		<select class="span1 form-control" name="sexs">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		 
	
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		
		  <input class="form-control" name="password" type="password" id="inputPassword1" placeholder="Password">
		
		
	  
		<label class="control-label" for="inputPassword1">Password Again <sup>*</sup></label>
		
		  <input class="form-control" name="password2" type="password" id="inputPassword1" placeholder="Password">
		
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<input class="form-control" type="date" name="datebirth">
	  

		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			
			  <input class="form-control" name="address" type="text" id="address" placeholder="Adress"/> <span>Street address, P.O. box, company name, c/o</span>
			
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">Street/Precinct<sup>*</sup></label>
			
			  <input class="form-control" name="street" type="text" id="city" placeholder="city"/> 
			
		</div>
		
			<label class="control-label" for="state">City/District<sup>*</sup></label>
			
			  <select id="state" class="form-control" name="city" >
				<option value="">-</option>
				</select>
			
			
		
		
		
			<label class="control-label" for="country">Province<sup>*</sup></label>
			
			<select id="country"class="form-control" name="province" >
				<option value="">-</option>
				<option value="1"> Hà Nội</option>
			</select>
			
		
			<label class="control-label" for="aditionalInfo">Additional information</label>
			
			  <textarea class="form-control"
			   name="aditionalInfo" id="aditionalInfo" cols="26" rows="3" placeholder="Additional information"></textarea>
			
			 
			
			
		
	<p style="color: white;"><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			
				
				<input class="btn btn-large btn-success" name="signup" type="submit" value="Register" />
			
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>

	</div><
	</div>

</body>
</html>