<?php
// Eval injection test variation #1360
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>