<?php
$link=mysqli_connect("localhost","root","root");
mysqli_select_db($link,"gb");
extract($_POST);

$scsitem1= $_POST['email']; 
$scsitem2= $_POST['psw']; 
$scsitem3= $_POST['psw-repeat']; 


$result = mysqli_query($link,"SELECT * FROM signupg WHERE email='$scsitem1' ");  
$num_rows = mysqli_num_rows($result);  
/*echo "<br>","Number of rows",$num_rows,"<br>";  */
if($num_rows==1)
{
//echo "<center>","User Name Already Exists ","</center>";
header('Location:  USEREXISTS.php');
exit();

}
else 
{
$string="INSERT INTO `signupg`(`email`,`password`,`password repeat`) VALUES('$scsitem1','$scsitem2','$scsitem3')";
$insert = mysqli_query($link,$string);
header('Location:  REGSUCCESS.html');
exit();
}

?>