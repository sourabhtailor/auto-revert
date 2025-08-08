<?php
// Command Injection test variation #405
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>