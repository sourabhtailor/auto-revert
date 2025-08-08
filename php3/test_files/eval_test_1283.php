<?php
// Eval injection test variation #1283
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>