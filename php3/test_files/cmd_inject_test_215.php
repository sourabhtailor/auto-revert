<?php
// Command Injection test variation #215
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>