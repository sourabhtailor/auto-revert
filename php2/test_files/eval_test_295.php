<?php
// Eval injection test variation #295
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>