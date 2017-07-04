
<html>
<head><title>Online|test</title>
<meta name="viewpoint"content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist\css\bootstrap.min.css">
<script src="bootstrap/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.6-dist\js\bootstrap.min.js" type="text/javascript"></script>
<script src="hide.js" type="text/javascript"></script>
<script>
window.onload=function(){
  document.getElementById('adminsubmit').onclick=function(){
    var ques=document.getElementById('ques').value;
    var a=document.getElementById('A').value;
    var b=document.getElementById('B').value;
    var c=document.getElementById('C').value;
    var d=document.getElementById('D').value;
    var correct=document.getElementById('correct').value;
    if((ques=="")||(a=="")||(b=="")||(c=="")||(d=="")||(correct==""))
       {document.getElementById('error').innerHTML="check all the entries";
    return false;
   }
  }
}
</script>
</head>
<body>
	<?php
  session_start();
  $server="localhost";
  $db="onlinetest";
  $user="root";
  $pass="";

          $con= mysqli_connect($server,$user,$pass,$db);
           if(mysqli_connect_errno())
           {
                 die( "error in connection ".mysqli_connect_error ); 
           }

           @$name =$_POST['name'];
@$pass=$_POST['pass'];

$_SESSION['user']=$name;
  $_SESSION['pass']=$pass;

  if(isset($_SESSION['user'])&&isset($_SESSION['pass']) )
 {     
      if($name=="m" && $pass=="m")      
         {
              
         }
         else 
            header('location:index.php');

       } else
            header('location:index.php');

  ?>
	<div class="container">
 	<div class="jumborton">
 		<h1 class="text-center"><strong>TEST BACK| PANEL</strong></h1>
 		<div class="row">
 			<div class="col-sm-6" >
 				<div id="login">
 					 <form role="form" action="admin.php" method="POST">
 				<div class="form-group" ><br><br><br>
                      <label for="name">Question:</label>
                      <input type="text" class="form-control" id="ques" name="ques" >
                </div>
                <div class="row">
                  <div class="col-sm-4">
                <div class="form-group">
                      <label for="A">A:</label>
                      <input type="text" class="form-control" id="A" name="A" >
                </div>
                <div class="form-group">
                      <label for="B">B:</label>
                      <input type="text" class="form-control" id="B" name="B" >
                </div>               
                  <div class="form-group">
                      <label for="C">C:</label>
                      <input type="text" class="form-control" id="C" name="C" >
                </div>
                 <div class="form-group">
                      <label for="D">D:</label>
                      <input type="text" class="form-control" id="D" name="D" >
                </div>
                <div class="form-group">
                      <label for="correct">correct:</label>
                      <input type="text" class="form-control" id="correct" name="correct" >
                </div>
              </div>
            </div>

                <button type="submit" class="btn btn-primary" id="adminsubmit" >submit</button>
            </form>
            </div>
</body>


<?php
@$ques=$_POST['ques'];
@$A=$_POST['A'];
@$B=$_POST['B'];
@$C=$_POST['C'];
@$D=$_POST['D'];
@$correct=$_POST['correct'];
if(isset($ques)&&isset($A)&&isset($B)&isset($C)&isset($D)&isset($correct))
  {  $q="INSERT INTO questions (question,a,b,c,d,correct) VALUES ('$ques', '$A','$B','$C','$D','$correct')";
 
 if(mysqli_query($con,$q))
 {

 }else
  {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}
 
 }

?>
<form role="form" acion="logout.php" method="POST">
<button type="submit" class="btn btn-danger">logout!</button>
</form>
<span id="error"></span>
</html>


