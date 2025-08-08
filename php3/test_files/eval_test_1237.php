<?php
// Eval injection test variation #1237
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>