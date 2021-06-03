<?php
include("header.php");
?>
<html>
<head>
</head>
<body>
<form method="post" action="checklogin.php"> 
									<div class="form-group">
									<label for="exampleInputEmail1">Loginid</label>
									<input type="text" style="width:500px" name="t1"  required="true" class="form-control" placeholder="Loginid"> 
									</div> 
								
	<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="password" style="width:500px" name="t2"  required="true" class="form-control" placeholder="Password"> 
									</div> 
																
								 <button type="submit" class="btn btn-default">Login</button> 
								 <?php
								 
								 if(isset($_GET["x"]))
								 {
									 ?><p style="color:RED">Invalid Password</p><?php
								 }
								 
?>								 
								 </form>
<br>
<br>
<a href='#'>Forgot Password</a>								 
								
											</div>
						</div>
					</div>
				</div>
</body>
</html>
<?php
 include("footer.php");
?>