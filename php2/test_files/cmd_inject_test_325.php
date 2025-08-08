<?php
// Command Injection test variation #325
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>