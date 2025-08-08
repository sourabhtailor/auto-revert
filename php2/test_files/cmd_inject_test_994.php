<?php
// Command Injection test variation #994
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>