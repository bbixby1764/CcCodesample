<html>
<head>
<style> @import url('childcare.css');</style>
</head>
<body>
<img src = 'up.png' id = 'imageUp' class = 'addBehavior'/>
<img src = 'down.png' id = 'imageDown' class = 'addBehavior'/>
<?php

$con = mysql_connect('localhost', 'childcare', 'password') or die(require_once('createdb.php'));
mysql_select_db('childcaredb', $con) or die('select table error');
$result = mysql_query("SELECT * FROM `childcareable` WHERE 2;") or die('error');
echo '<ul id = "ulist">';
while($row = mysql_fetch_array($result)){
	echo '<li>'.$row['employee_first_name']. " ". $row['employee_last_name'].'</li>';
	echo "<br />";
}
echo '</ul>';
mysql_close($con);

  ?>
  <script type = 'text/javascript' src = 'childcare.js'></script>
  </body>
  </html>