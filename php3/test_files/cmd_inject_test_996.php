<?php
// Command Injection test variation #996
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>