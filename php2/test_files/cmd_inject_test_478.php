<?php
// Command Injection test variation #478
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>