<?php
// Command Injection test variation #1215
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>