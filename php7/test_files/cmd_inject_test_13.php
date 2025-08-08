<?php
// Command Injection test variation #13
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>