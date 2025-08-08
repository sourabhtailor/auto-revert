<?php
// Command Injection test variation #955
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>