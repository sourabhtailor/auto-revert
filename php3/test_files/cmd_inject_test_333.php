<?php
// Command Injection test variation #333
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>