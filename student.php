<?php
session_start();

 $server="localhost";
  $db="onlinetest";
  $user="root";
  $pass="";

 $con= mysqli_connect($server,$user,$pass,$db);
           if(mysqli_connect_errno())
           {
                 die( "error in connection ".mysqli_connect_error() ); 
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
 <html>
<head><title>student</title>
<meta name="viewpoint"content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist\css\bootstrap.min.css">
<script src="bootstrap/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.6-dist\js\bootstrap.min.js" type="text/javascript"></script>
<script src="hide.js" type="text/javascript"></script>
</head>
<body>
  <h1 align="center";><strong>C.S.I |RECUITMENT TEST</strong></h1><br>
  <form role="form" action="result.php" method="POST">
  <div class="form-group">
                      <label for="name1"></label>
                      <input type="hidden" class="form-control" id="name1" name="name1" value="<?php echo $_POST['name'] ?>"
                </div>
  <div class="form-group">
                      <label for="pass1"></label>
                      <input type="hidden" class="form-control" id="pass1" name="pass1" value="<?php echo $_POST['pass'] ?>"
                </div>              
<?php   

    $sql="SELECT * FROM questions ";

$result=mysqli_query($con,$sql);
//var_dump($result);


   if(mysqli_num_rows($result)>0)
   {   
      while($row=mysqli_fetch_assoc($result))
       {
         
       
      // var_dump($result);
      // var_dump($row);
     /*  echo $row['ques']; echo"<br>";
       echo $row['A'];echo"&nbsp&nbsp&nbsp&nbsp";
       echo $row['B'];echo"&nbsp&nbsp&nbsp&nbsp";
       echo $row['C'];echo"&nbsp&nbsp&nbsp&nbsp";
       echo $row['D'];echo"&nbsp&nbsp&nbsp&nbsp";echo"<br>";echo"<br>";*/
       ?>
  <div class="container">
    <div class="jumborton">
      <div class="row">
         <div class="col-sm-2">
         </div>

      <div class="col-sm-8">

       <div class="radio" >
       
  <label for="college"><strong> <?php echo $row['question']; ?></strong></label ><br>
         <label><input type="radio" value="<?php echo $row['a']; ?>" name=<?php echo @$row['id']; ?> id="akgec"><?php echo $row['a']; ?></label>&nbsp&nbsp&nbsp
       <label><input type="radio" value="<?php echo $row['b']; ?>" name=<?php echo @$row['id']; ?> id="others"><?php echo $row['b']; ?></label>&nbsp&nbsp&nbsp
           <label><input type="radio" value="<?php echo $row['c']; ?>" name=<?php echo @$row['id']; ?> id="others"><?php echo $row['c']; ?></label>&nbsp&nbsp&nbsp
              <label><input type="radio" value="<?php echo $row['d']; ?>" name=<?php echo @$row['id']; ?> id="others"><?php echo $row['d']; ?></label>&nbsp&nbsp&nbsp
     

<?php
}
   }

?><br><br><br>

<input type="submit" class="btn btn-primary center-block" value="Submit">
</form>

        </div>
      </div>
      <div class="col-sm-2">
        <form role="form" action="logout.php" >
  <div class="form-group">
<input  class="btn btn-danger " type="submit" value="Logout!">
</div>
</form>
      </div>
      </div>
    </div>
  </div>



</body>
</html>


 
