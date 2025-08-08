<?php
// Command Injection test variation #919
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>