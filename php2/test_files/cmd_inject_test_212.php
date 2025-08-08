<?php
// Command Injection test variation #212
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>