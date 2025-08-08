<?php
// Command Injection test variation #634
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>