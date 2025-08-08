<?php
// Eval injection test variation #1033
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>