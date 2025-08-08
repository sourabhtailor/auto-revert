<?php
// Command Injection test variation #284
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>