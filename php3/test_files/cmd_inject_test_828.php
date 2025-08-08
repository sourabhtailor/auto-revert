<?php
// Command Injection test variation #828
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>