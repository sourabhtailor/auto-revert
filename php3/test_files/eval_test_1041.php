<?php
// Eval injection test variation #1041
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>