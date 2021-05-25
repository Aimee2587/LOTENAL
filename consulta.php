<?php
include 'bille.php';
 
$query = "select * from billetes"; 
$result = mysql_query($query);
while ($registro = mysql_fetch_array($result)){
echo "
<tr>
<td width='150'>".$registro['fecha']."</td>
<td width='150'>".$registro['billete']."</td>
<td width='150'></td>

</tr>
";
}

?>






     