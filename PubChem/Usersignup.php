<html>
<head>
<title>User Registration</title>
</head>
<body bgcolor=FFFFCC>
<script name="javascript">
function validateform()
{
var fname =document.forms["customerSignup"]["cstuname"].value;
var lname =document.forms["customerSignup"]["cstpassword"].value;
if (fname==null || fname=="")
{
alert("User name can not be blank");
return false;
}
else (lname==null || lname=="")
{
alert("password can not be blank");
return false;
}
}
</script>
<?php
//echo ".".isset($_POST['submit']);
if (isset($_POST["ispost"]))
{
/*$con = mysqli_connect("localhost","root","","OnlineShopping");
if (mysqli_connect_errno($con)) {
echo "Connection fail";
}*/
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{
$db_selected = mysql_select_db("pubchem_bioassay",$con);
$fname = $_POST["cstuname"];
$lname = $_POST["cstpassword"];
$sqlqur = "Insert into user(UserName,Password) values ('$fname','$lname') ";
if (!mysql_query($sqlqur))
{
die('Error: ' . mysql_error($con));
}
echo "1 record added";
?>
<script type="text/javascript">
window.location.href = "http://localhost/PubChem/Index.php"
</script>
<?php
mysql_close($con);
}
}
else
{
?>
<form name="userSignup" action="UserSignUP.php" method="post" onsubmit="return validateform()">
<input type="hidden" name="ispost" value="1"/>
<thead>
<h2 align="left"><font bgcolor="#ADD8E6"><u>Please register here</u></font></h2>
</thead>
<table border="0">
<tr>
<td ><font color="black"><b>User Name:</b></font></td>
<td><input type="text" style="background-color:white" width="100%" size="35" name="cstuname"/>
</td>
</tr>
<tr>
<td><b>Password:</b></td>
<td><input type="password"style="background-color:white" width="100%" size="35"
name="cstpassword"/></td>
</tr>
<tr>
<td colspan="2"><button><b>Register</b></button></td>
</tr>
</table>
</form>
<?php }?>
</body>
</html>