<?php
// Eval injection test variation #1423
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>