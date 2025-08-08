<?php
// Command Injection test variation #1181
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>