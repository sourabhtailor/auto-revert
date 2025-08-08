<?php
// Command Injection test variation #801
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>