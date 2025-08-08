<?php
// Command Injection test variation #654
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>