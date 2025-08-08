<?php
// Eval injection test variation #854
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>