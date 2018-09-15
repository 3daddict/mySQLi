<?php
require_once('mysql_connect.php');
print("conn: "); print_r($conn);

$query = 'SELECT id, username, email FROM users';

$result = mysqli_query($conn,$query);

print("<br><br><pre>".print_r($result,true).'<pre>');

if(!empty($result) && mysqli_num_rows($result) > 0) {
    print("<br><br>we have results");
    while($single_row = mysqli_fetch_assoc($result)) {
        print("<br>got a row".print_r($single_row,true));
    }
}

$username = 'Willy';
$password = md5('wonka');
$email = 'willy@wonka.com';
$query2 = "INSERT INTO `users` SET
    `username` = '$username',
    `password` = '$password',
    `email` = '$email'";

print("<br>query = $query2");
$result = mysqli_query($conn,$query2);
    if(mysqli_affected_rows($result) > 0) {
        print("<br>Row was inserted");
    } else {
        print("something went wrong");
    }
    print(mysqli_insert_id($conn));

?>