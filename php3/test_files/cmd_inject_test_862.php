<?php
// Command Injection test variation #862
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>