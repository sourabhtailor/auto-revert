<?php
// Command Injection test variation #821
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>