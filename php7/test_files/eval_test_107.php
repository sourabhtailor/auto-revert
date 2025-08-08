<?php
// Eval injection test variation #107
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>