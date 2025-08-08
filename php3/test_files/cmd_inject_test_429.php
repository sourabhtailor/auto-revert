<?php
// Command Injection test variation #429
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>