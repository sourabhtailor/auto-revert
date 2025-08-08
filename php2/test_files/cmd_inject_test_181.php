<?php
// Command Injection test variation #181
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>