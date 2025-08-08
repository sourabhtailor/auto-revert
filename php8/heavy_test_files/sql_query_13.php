<?php
// SQL logic #13
$mysqli = new mysqli("localhost", "root", "", "test_db");
$input = $_GET['query'] ?? '';
$res = $mysqli->query("SELECT * FROM data WHERE info LIKE '%$input%'");
while ($row = $res->fetch_assoc()) {
    echo $row['info'] . "<br>";
}
?>