<?php
// Command Injection test variation #916
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>