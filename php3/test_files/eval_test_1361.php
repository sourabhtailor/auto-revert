<?php
// Eval injection test variation #1361
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>