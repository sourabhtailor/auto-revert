<?php
// Command Injection test variation #174
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>