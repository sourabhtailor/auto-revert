<?php
// Command Injection test variation #699
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>