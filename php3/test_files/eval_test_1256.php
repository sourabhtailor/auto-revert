<?php
// Eval injection test variation #1256
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>