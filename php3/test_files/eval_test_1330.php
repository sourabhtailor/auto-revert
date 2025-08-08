<?php
// Eval injection test variation #1330
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>