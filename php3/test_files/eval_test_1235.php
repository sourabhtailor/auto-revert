<?php
// Eval injection test variation #1235
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>