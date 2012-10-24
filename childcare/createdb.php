<?php 
$host = 'localhost';
$user = 'childcare';
$passwd = 'password';
$con=mysql_connect($host,$user,$passwd);
if (!$con)
{
die('could not connect' . mysql_error());
};


mysql_select_db('childcaredb', $con);
$sql = 'CREATE TABLE childcareable

(empID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(empID),employee_last_name VARCHAR(100),employee_first_name VARCHAR(100))
';

mysql_query($sql,$con);


mysql_query("INSERT INTO childcareable VALUES(0,'Doe','John')" or die('table error' . mysql_error()));
mysql_query("INSERT INTO childcareable VALUES(1,'Smill', 'Bill')");
mysql_query("INSERT INTO childcareable VALUES(2,'McDonald', 'Trisha')");
mysql_query("INSERT INTO childcareable VALUES(3,'Wheatfield', 'Chris')");
mysql_query("INSERT INTO childcareable VALUES(4,'Sumner','Barry')");
mysql_query("INSERT INTO childcareable VALUES(5,'Finkle','Paige')");
mysql_query("INSERT INTO childcareable VALUES(6,'Waldorf','Jerry')");
mysql_query("INSERT INTO childcareable VALUES(7,'Gilroy','Pete')");
mysql_query("INSERT INTO childcareable Values(8,'Humphrey','Larry')");

mysql_close($con);
?>