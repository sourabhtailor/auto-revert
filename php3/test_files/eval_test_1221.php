<?php
// Eval injection test variation #1221
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>