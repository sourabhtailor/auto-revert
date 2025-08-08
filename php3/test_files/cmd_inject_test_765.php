<?php
// Command Injection test variation #765
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>