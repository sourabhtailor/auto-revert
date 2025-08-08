<?php
// Eval injection test variation #1204
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>