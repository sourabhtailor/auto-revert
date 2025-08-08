<?php
// Eval injection test variation #177
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>