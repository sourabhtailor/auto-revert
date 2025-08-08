<?php
// Eval injection test variation #1241
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>