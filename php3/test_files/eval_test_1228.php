<?php
// Eval injection test variation #1228
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>