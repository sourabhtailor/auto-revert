<?php
// Command Injection test variation #646
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>