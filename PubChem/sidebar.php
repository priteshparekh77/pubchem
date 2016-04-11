<?php
session_start();
if (!isset($_SESSION['UserID']))
{
die("You aren't allowed to access this page");
header("location:http://codd.cs.montclair.edu/~parekhp/cgi-bin/OnlineShopping/Index.php");
}
else
{
//echo "Authorized";
}
?>
<html>
<body bgcolor=FFFFCC>
<?php
$SesUserID=$_SESSION['UserID'] ;
$con = @mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{
$db_selected = @mysql_select_db("pubchem_bioassay",$con);
$qur1 = "select * from user where UserID = '".$SesUserID."' ";
$result1=mysql_query($qur1);
while ($row = mysql_fetch_array($result1))
{
$a = $row['Username'];
//$b = $row['Last_Name'];
}
}
mysql_close($con);
?>
<link rel="stylesheet" href="/resources/demos/style.css" />
<table bgcolor="#ADD8E6" width="100%">
<tr >
<td align="left">Welcome</td>
<td align="right"><?php echo $a?></td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table>
<table></table>
<table></table>
<table></table>
<table width="90%" cellspacing="4" cellpadding="4">
<tr bgcolor="#ADD8E6">
<td> <font color="#191970" size=4><B>Master Dashboard</b> </font></td>
</tr>
<tr></tr>
<tr></tr>
<tr bgcolor="#ADD8E6">
<td> <a href="BioAssay.php" target="tag"/><font color="#191970">BioAssay</a> </font></td>
</tr>
<tr></tr>
<tr bgcolor="#ADD8E6">
<td> <a href="data.php" target="tag"/><font color="#191970">All data Report</a> </font></td>
</tr>
<tr></tr>
<tr bgcolor="#ADD8E6">
<td> <a href="home.php" target="tag"/><font color="#191970">Home</a> </font></td>
</tr>

<tr></tr>
<tr></tr>
<tr bgcolor="#ADD8E6">
<td align="left"><a target="_parent" href="index.php">Logout</a></td>
</tr>
</tbody>
</table>
</body>
<html>