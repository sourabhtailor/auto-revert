<?php
// Command Injection test variation #843
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>