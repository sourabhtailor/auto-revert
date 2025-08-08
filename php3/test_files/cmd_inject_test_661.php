<?php
// Command Injection test variation #661
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>