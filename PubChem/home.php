<html>
<head>
<script type="text/javascript" lang="javascript" >
function frmsbmt(ID)
{
//alert("more details");
document.getElementById("frm1").action="substance.php?Pb_SID="+ID;
document.getElementById("frm1").submit();
}
function frmsbmt1(ID)
{
//alert("more details");
document.getElementById("frm1").action="PcCompound.php?Pb_CID="+ID;
document.getElementById("frm1").submit();
}
</script>
</script>
</head>
<body bgcolor=FFFFCC>
<?php
$link = @mysql_connect("localhost","root","");
if (!$link) {
die('Could not connect: ' . mysql_error());
}
linebreak();
$db = @mysql_select_db("pubchem_bioassay", $link);
if (!$db) {
die('Could not open database: ' . mysql_error());
}
createDynamicHTMLTable("BioAssay Data", "select * FROM bioassay_concise limit 1000" , $link);
mysql_close($link);
function strong($text)
{
return "<STRONG>$text</STRONG>\n";
}
function linebreak($text="\n") {
echo nl2br( $text );
}
?>
<?php
function createDynamicHTMLTable($table_name, $sql_query, $link)
{
$sql_result = mysql_query($sql_query, $link);
//echo $sql_query;
if (($sql_result)||(mysql_errno == 0))
{
echo "<form method=post id='frm1'>";
echo "<DIV>\n";
linebreak( strong( sprintf("Table: \"%s\"", $table_name) ) );
echo "<TABLE borderColor=#000000 cellSpacing=0 cellPadding=6 border=2 width=100%>\n";
echo "<TBODY>\n";
$rowcount=mysql_num_rows($sql_result);
if ($rowcount >0)
{
$i = 0;
echo "<TR vAlign=top bgColor=#00ffff>\n";
?>
<th>Substance</th><?php
?>
<th>Compound</th><?php
while ($i < mysql_num_fields($sql_result))
{
echo "<TH>". mysql_field_name($sql_result, $i) . "</TH>\n";
$i++;
}
echo "</TR>\n";
while ($rows = mysql_fetch_array($sql_result,MYSQL_ASSOC))
{
$Pb_SID=$rows['Pb_SID'];
$Pb_CID=$rows['Pb_CID'];
echo "<TR>\n"; ?>
<td><input type=button onclick="frmsbmt('<?php echo $Pb_SID?>')" value='More Details'/>
</td><?php
?>
<td><input type=submit onclick="frmsbmt1('<?php echo $Pb_CID; ?>')" value='More
Details'/></td><?php
foreach ($rows as $data)
{
echo "<TD align='center'>". $data . "</TD>\n";
}
?>
<?php echo "</TR>\n";
}
}
else
{
echo "<TR>\n<TD colspan='" . ($i+1) . "'>Your table is empty</TD></TR>\n";
}
echo "</TBODY>\n</TABLE>\n";
echo "</DIV>\n";
echo "</form>";
}
else
{
echo nl2br( sprintf( "Error in running query: %s\n", mysql_error()) );
}
mysql_free_result($sql_result);
linebreak();
//mysql_close($link);
}
?>
</body>
<html>