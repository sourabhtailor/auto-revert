<?php
// Eval injection test variation #1177
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>