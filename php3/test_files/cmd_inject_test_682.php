<?php
// Command Injection test variation #682
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>