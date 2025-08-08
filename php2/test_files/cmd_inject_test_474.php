<?php
// Command Injection test variation #474
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>