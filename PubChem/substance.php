<html>
<head></head>
<body bgcolor=FFFFCC>
<?php
$Pb_SID=$_GET['Pb_SID'];
session_start();
$_SESSION['Pb_SID']=$Pb_SID;
//$_SESSION['Pb_CID']=$c;
//$Pb_CID=$_GET['Pb_CID'];
//echo $Pb_SID;
$substance=file_get_contents("http://pubchem.ncbi.nlm.nih.gov/toc/summary_toc.cgi?tocid=395&sid=$Pb_SID");
//$compound=file_get_contents("http://pubchem.ncbi.nlm.nih.gov/toc/summary_toc.cgi?tocid=395&cid=$Pb_CID");
//echo $substance;
//$a=strip_tags($html);
//echo
//echo $html;
/* --- For Substance Name----*/
$Sname='<div id="dname"';
$Sname2='<a name="synonym2mesh"';
$Spos = strpos($substance, $Sname);
$Spos1 = strpos($substance, $Sname2);
$SubNameTag = substr($substance, $Spos,$Spos1);
$SubName=strip_tags($SubNameTag);
//............ For Synonames..........
$Ssyno='<div id="dname"';
$Ssyno2='<a name="synonym_page"';
$Synopos = strpos($substance, $Ssyno);
$Synopos1 = strpos($substance, $Ssyno2);
$SubSynoNameTag = substr($substance, $Synopos,$Synopos1);
$SubSynoName=strip_tags($SubSynoNameTag);
//echo $SubName.".".$SubSynoName;
$con = @mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{
$db_selected = @mysql_select_db("pubchem_bioassay",$con);
$sqlqur = "Insert into Data(Pb_SID,Sub_Name,Sub_Syno) values
('$Pb_SID','$SubName','$SubSynoName') ";
if (!mysql_query($sqlqur))
{
die('Error: ' . mysql_error($con));
}
echo "<b>Click to view the Record</b><br/>";
echo $substance;
?>
<?php
}
?>
</body>
</html>