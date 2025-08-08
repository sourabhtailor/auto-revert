<?php
// Eval injection test variation #1273
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>