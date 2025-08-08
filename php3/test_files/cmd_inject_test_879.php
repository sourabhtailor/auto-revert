<?php
// Command Injection test variation #879
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>