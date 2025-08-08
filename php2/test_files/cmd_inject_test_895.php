<?php
// Command Injection test variation #895
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>