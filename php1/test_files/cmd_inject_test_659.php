<?php
// Command Injection test variation #659
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>