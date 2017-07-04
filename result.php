<?php
$server="localhost";
  $db="onlinetest";
  $user="root";
  $pass="";

 $con= mysqli_connect($server,$user,$pass,$db);
           if(mysqli_connect_errno())
           {
                 die( "error in connection ".mysqli_connect_error ); }

$q="SELECT * FROM questions";
$sum=0;
 $result=mysqli_query($con,$q);
 while($row=mysqli_fetch_assoc($result))
 {       @$id=$row['id'];
       @$ans=$_POST[$id];
    echo @$row['correct'];
     if($ans==@$row['correct'])
     {
         $sum=$sum+3;

     }
    
 }

 //echo $sum;
$q=" UPDATE student SET score='$sum' WHERE name='m' AND pass='m' ";
 
$score_result=mysqli_query($con,$q);
 

//var_dump($score_result);

header('location:student.php');
  mysqli_close($con);
?>