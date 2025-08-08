<?php
// Eval injection test variation #1366
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>