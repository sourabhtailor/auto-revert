<?php
// Command Injection test variation #818
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>