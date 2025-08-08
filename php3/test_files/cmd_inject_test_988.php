<?php
// Command Injection test variation #988
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>