<?php
// Command Injection test variation #1316
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>