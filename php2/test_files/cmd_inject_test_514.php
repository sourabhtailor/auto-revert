<?php
// Command Injection test variation #514
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>