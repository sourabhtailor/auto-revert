<?php
// Command Injection test variation #220
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>