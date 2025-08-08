<?php
// Eval injection test variation #1465
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>