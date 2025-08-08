<?php
// Command Injection test variation #289
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>