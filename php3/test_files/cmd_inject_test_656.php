<?php
// Command Injection test variation #656
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>