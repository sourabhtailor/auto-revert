<?php
// Eval injection test variation #1125
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>