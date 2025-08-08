<?php
// Command Injection test variation #697
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>