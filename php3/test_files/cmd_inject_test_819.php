<?php
// Command Injection test variation #819
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>