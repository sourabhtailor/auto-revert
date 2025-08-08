<?php
// Command Injection test variation #763
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>