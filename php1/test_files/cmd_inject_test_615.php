<?php
// Command Injection test variation #615
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>