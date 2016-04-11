<html>
<head></head>
<body bgcolor=FFFFCC>
<script name="Javascript">
function validateform()
{
//alert("asdasd");
var catname=document.forms["SearchForm"]["search"].value;
if (catname==null || catname=="")
{
alert("Search can not be blank");
return false;
}
}
</script>
<table height="10%">
<tr>
<td align="center" colspan="2" width="100%"><font size="9" color="black"><u>
<b>PubChem-BioAssay</u></b></td>
<td></td>
</tr>
<tr>
<td colspan="2" align="right"><form action="http://pubchem.ncbi.nlm.nih.gov/summary/summary.cgi"
target="tag">
<select name="db" align="right">
<option value="pcsubstance">PubChem Substance</option>
<option selected value="pccompound">PubChem Compound</option>
<option value="pcassay">PubChem BioAssay</option>
</select>
<input align="right"type="text" size="18" name="term" value="" />
<input type="submit" value="Go" />
</form>
</td>
<td></td>
</tr>
</table>
</body>
</html>