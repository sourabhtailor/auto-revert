<?php
// Command Injection test variation #280
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>