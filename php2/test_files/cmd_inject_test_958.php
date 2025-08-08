<?php
// Command Injection test variation #958
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>