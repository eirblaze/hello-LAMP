<?php
// https://www.php.net/manual/ja/pdo.connections.php
try {
    $user = "root";
    $pass = "password";
    $dbh = new PDO('mysql:host=mysql;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from testt') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}
