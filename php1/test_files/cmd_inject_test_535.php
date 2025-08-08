<?php
// Command Injection test variation #535
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>