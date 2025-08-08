<?php
// Eval injection test variation #303
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>