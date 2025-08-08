<?php
// Command Injection test variation #488
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>