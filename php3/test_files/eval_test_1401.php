<?php
// Eval injection test variation #1401
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>