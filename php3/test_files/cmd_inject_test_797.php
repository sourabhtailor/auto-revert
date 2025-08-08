<?php
// Command Injection test variation #797
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>