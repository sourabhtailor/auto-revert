<?php
// Command Injection test variation #489
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>