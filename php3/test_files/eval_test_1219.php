<?php
// Eval injection test variation #1219
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>