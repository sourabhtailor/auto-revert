<?php
// Command Injection test variation #207
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>