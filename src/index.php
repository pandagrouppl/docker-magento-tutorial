<?php
$mysqli = mysqli_connect('mysql', 'myuser', 'test123', 'mydatabase');
if ($mysqli) {
    $mysqli->query('
        CREATE TABLE IF NOT EXISTS `user` (
            `id` INT unsigned NOT NULL AUTO_INCREMENT,
            `email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
            `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB;
    ');
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
