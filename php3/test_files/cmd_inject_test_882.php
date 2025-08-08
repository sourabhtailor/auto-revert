<?php
// Command Injection test variation #882
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>