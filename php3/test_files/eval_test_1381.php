<?php
// Eval injection test variation #1381
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>