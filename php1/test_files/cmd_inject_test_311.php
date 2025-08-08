<?php
// Command Injection test variation #311
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>