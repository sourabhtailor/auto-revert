<?php
// Command Injection test variation #670
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>