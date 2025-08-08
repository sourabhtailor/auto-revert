<?php
// Command Injection test variation #105
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>