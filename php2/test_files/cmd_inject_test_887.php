<?php
// Command Injection test variation #887
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>