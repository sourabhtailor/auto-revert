<?php
// Command Injection test variation #868
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>