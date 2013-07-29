<?php
$con = mysql_connect('localhost', 'pi', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("preset_drinks", $con);
echo "<center> <table class='table span6' >";
$result = mysql_query("SELECT * FROM presets");
while($row = mysql_fetch_array($result))
   {
  echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
   // echo " | ";
	    echo "<td>" . $row['Apple'] . "</td>";
    //echo " | ";
	    echo "<td>" . $row['Cranberry'] . "</td>";
   // echo " | ";
	    echo "<td>" . $row['Grape'] . "</td>";
   // echo " | ";
	    echo "<td>" . $row['Lemonade'] . "</td>";
  //  echo " | ";
    echo "<td>" . $row['Orange'] . "</td>";
    //echo "<br />";
  echo "</tr>";
  }
  echo "</table> </center>";
mysql_close($con);
?>