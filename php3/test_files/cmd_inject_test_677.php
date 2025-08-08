<?php
// Command Injection test variation #677
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>