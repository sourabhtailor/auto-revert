<?php
// Command Injection test variation #839
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>