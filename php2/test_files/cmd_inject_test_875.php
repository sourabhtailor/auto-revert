<?php
// Command Injection test variation #875
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>