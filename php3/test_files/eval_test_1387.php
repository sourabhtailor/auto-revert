<?php
// Eval injection test variation #1387
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>