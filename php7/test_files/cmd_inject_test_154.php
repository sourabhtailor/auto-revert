<?php
// Command Injection test variation #154
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>