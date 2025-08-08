<?php
// Command Injection test variation #176
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>