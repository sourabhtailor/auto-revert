<?php
// Command Injection test variation #981
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>