<?php
// Eval injection test variation #1236
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>