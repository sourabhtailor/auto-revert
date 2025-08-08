<?php
// Eval injection test variation #1261
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>