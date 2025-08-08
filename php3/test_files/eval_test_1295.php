<?php
// Eval injection test variation #1295
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>