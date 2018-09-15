<?php
require_once('mysql_connect.php');
print("conn: "); print_r($conn);

$query = 'SELECT * FROM users';

$result = mysqli_query($conn,$query);

print("<br><br><pre>.print_r"($result,true).'<pre>');
?>