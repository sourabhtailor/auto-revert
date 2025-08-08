<?php
// Eval injection test variation #552
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>