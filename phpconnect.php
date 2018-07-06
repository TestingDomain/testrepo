<html>
<head>
<title> TEST PHP Connection Script</title>
</head>
<body>

<h3>Welcome to the PHP Connect Test</h3>

<?php
$dbname = 'temp';
$dbuser = 'root';
$dbpass = 'pak123';
$dbhost = 'localhost';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
mysql_select_db($dbname)  or die("Could not open the database '$dbname'");
$result = mysql_query("SELECT id, name FROM em1");
while($row=mysql_fetch_array($result, MYSQL_NUM)){ printf("ID:%s Name: %s <br>", $row[0], $row[1]);
}
?>
</body>
</html>

