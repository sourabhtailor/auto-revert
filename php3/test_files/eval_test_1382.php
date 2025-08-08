<?php
// Eval injection test variation #1382
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>