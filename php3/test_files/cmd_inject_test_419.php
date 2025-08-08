<?php
// Command Injection test variation #419
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>