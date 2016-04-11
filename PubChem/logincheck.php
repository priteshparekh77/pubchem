<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Check</title>
</head>
<body>
<?php
session_start();
$con = mysqli_connect("localhost","root","","pubchem_bioassay");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
else
{
//$db_selected = mysql_select_db("pubchem_bioassay",$con);
$UserName = $_POST["username"];
$qur = "select * from user where Username = '".$UserName."' ";
// echo $qur;
$result=mysqli_query($con,$qur);
$rowrs=mysqli_num_rows($result);
If ($rowrs >0)
{
while ($row = mysqli_fetch_array($result))
{
$a = $row['Username'];
$b = $row['Password'];
$c = $row['UserID'];
if($_POST["username"] == $a && $_POST["password"] == $b)
{
session_start();
// store session data
$_SESSION['UserID']=$c;
//echo "welcome user";
header("location:http://localhost/PubChem/UserHomeScreen.php");
}
else
{
echo "access denied";
}
}
}
ELSE
{
echo "Username or Password not found";
}
}
// session_destroy();
mysqli_close($con);
?>
</body>
</html>