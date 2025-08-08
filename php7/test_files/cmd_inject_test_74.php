<?php
// Command Injection test variation #74
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>