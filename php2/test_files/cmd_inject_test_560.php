<?php
// Command Injection test variation #560
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>