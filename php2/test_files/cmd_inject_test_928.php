<?php
// Command Injection test variation #928
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>