<?php
// Command Injection test variation #686
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>