<?php
// Command Injection test variation #789
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>