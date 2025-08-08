<?php
// Eval injection test variation #495
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>