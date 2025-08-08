<?php
// Eval injection test variation #1483
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>