<?php
// Command Injection test variation #982
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>