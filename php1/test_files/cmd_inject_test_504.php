<?php
// Command Injection test variation #504
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>