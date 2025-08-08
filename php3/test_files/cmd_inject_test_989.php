<?php
// Command Injection test variation #989
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>