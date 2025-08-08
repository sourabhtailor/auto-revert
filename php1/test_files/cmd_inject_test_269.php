<?php
// Command Injection test variation #269
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>