<?php
// Command Injection test variation #628
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>