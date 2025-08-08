<?php
// Command Injection test variation #732
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>