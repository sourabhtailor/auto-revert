<?php
// Command Injection test variation #414
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>