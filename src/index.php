<?php
$mysqli = mysqli_connect('mysql', 'myuser', 'test123', 'mydatabase');
if ($mysqli) {
    if (!$mysqli->query('INSERT INTO user (email, password) VALUES ("testuser", "testpassword")')) {
        die('Error');
    }
    $result = $mysqli->query('SELECT * FROM user');
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            printf ("<p>#%d %s</p>\n", $row['id'], $row['email']);
        }
        $result->free();
    }
}
