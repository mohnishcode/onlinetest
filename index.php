<html>
<head><title>Online|test</title>
<meta name="viewpoint"content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist\css\bootstrap.min.css">
<script src="bootstrap/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.6-dist\js\bootstrap.min.js" type="text/javascript"></script>
<script src="hide.js" type="text/javascript"></script>
<script>
   window.onload= function(){
      window.onload =document.getElementById('stu').style.display="block";
      window.onload =document.getElementById('login').style.display="none";
       window.onload =document.getElementById('login1').style.display="none";
      window.onload =document.getElementById('fac').style.display="block";

      document.getElementById('student').onclick=function()
      {
           if(document.getElementById('stu').style.display=="block")
          {  document.getElementById('stu').style.display="none";
               document.getElementById('login').style.display="block"; 
      return false;}   
      }
        document.getElementById('faculty').onclick=function()
      {
        if(document.getElementById('fac').style.display=="block")
         
          {  document.getElementById('fac').style.display="none";
               document.getElementById('login1').style.display="block"; 
      return false;}
      }
}
</script>


</head>
<body>
 <div class="container">
 	<div class="jumborton">
 		<h1 class="text-center"><strong>TEST | PANEL</strong></h1>
 		<div class="row">
      <!-- student login-->
      <div class="col-sm-1" >
      </div>
 			<div class="col-sm-4" >

 				<div id="login">
 					 <form role="form" action="student.php" method="POST">
 				<div class="form-group" ><br><br><br>
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="usename">
                </div>
                <div class="form-group">
                      <label for="password">password:</label>
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="password">
                </div>
                <button type="submit" class="btn btn-danger" id="studentsubmit" >login</button>
            </form>
            </div>
 				<div id="stu">
                    <h1 class="text-center"><strong>Student</strong></h1><br>
 				  

 						<img class="img-responsive center-block" src="student.png" alt="first slide"><br>
 					
 					
 						<button type="submit" class="btn btn-primary center-block" name="student"  id="student" >student</button>
 				   
 			</div>
      <div class="col-sm-1" >
        </div>
 			</div>
          <!-- admin login-->
        <div class="col-sm-1" >
        </div>
 			<div class="col-sm-4">
        <div id="login1">
           <form role="form" action="admin.php" method="POST">
        <div class="form-group" ><br><br><br>
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name1" name="name" placeholder="usename">
                </div>
                <div class="form-group">
                      <label for="password">password:</label>
                      <input type="password" class="form-control" id="pass1" name="pass" placeholder="password">
                </div>
                <button type="submit" class="btn btn-danger" id="facultysubmit" >login</button>
            </form>
            </div>
            <div id="fac">
 				<h1 class="text-center"><strong>Admin</strong></h1><br>
 				<form role="form" >
 					<div class="form-group">
 						<img class="img-responsive center-block" src="admin.png" ><br><br>
 						<button type="submit" class="btn btn-primary center-block" name="faculty" id="faculty">Admin</button>
 					</div>
 				</form>
 			</div>
      <div class="col-sm-1" >
        </div>
      <!-- extra form for furter uses-->
    <!--</div id="fac">
 			<div class="col-sm-4">
 				<h1 class="text-center"><strong>Admin</strong></h1>
                     <form role="form" method="POST" action="admin.php">
 					<div class="form-group">
 						<div class="center">
 						<button type="submit" class="btn btn-default center-block" name="admin"  id="admin">Admin</button>
 			            </div>
 			        </div>
  				</form>		
 			</div>-->
 		</div>
 	</div>
 </div>
</body>
</html>