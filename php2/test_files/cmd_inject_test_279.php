<?php
// Command Injection test variation #279
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>