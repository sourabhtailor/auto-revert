<?php
// Eval injection test variation #505
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>