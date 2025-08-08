<?php
// Command Injection test variation #945
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>