<?php
// Eval injection test variation #1012
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>