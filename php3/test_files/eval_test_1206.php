<?php
// Eval injection test variation #1206
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>