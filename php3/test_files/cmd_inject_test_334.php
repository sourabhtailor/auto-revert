<?php
// Command Injection test variation #334
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>