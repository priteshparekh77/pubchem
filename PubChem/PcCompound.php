<html>
<head></head>
<body bgcolor=FFFFCC>
<?php
$Pb_CID=$_GET['Pb_CID'];
session_start();
$Pb_SID=$_SESSION['Pb_SID'];
//$Pb_CID=$_GET['Pb_CID'];
//echo $Pb_SID;
//$substance=file_get_contents("http://pubchem.ncbi.nlm.nih.gov/toc/summary_toc.cgi?tocid=395&sid=$Pb_SID");
$compound=file_get_contents("http://pubchem.ncbi.nlm.nih.gov/toc/summary_toc.cgi?tocid=395&cid=$Pb_CID");
$compoundinfo=strip_tags($compound);
$con = @mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{
$db_selected = @mysql_select_db("pubchem_bioassay",$con);
$sqlqur = "Insert into datacom(Info,CID,Pb_SID) values ('$compoundinfo','$Pb_CID','$Pb_SID')";
//echo $sqlqur;
if (!mysql_query($sqlqur))
{
die('Error: ' . mysql_error($con));
}
echo "<b>Click to view the Record</b><br/>";
echo $compound;
?>
<br/>
<?php
}
?>
</body>
</html>