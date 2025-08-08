<?php
// Command Injection test variation #300
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>