<?php
// Eval injection test variation #70
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>