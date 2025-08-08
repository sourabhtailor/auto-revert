<?php
// Eval injection test variation #1037
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>