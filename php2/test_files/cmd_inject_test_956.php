<?php
// Command Injection test variation #956
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>