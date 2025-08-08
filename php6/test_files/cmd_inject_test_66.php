<?php
// Command Injection test variation #66
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>