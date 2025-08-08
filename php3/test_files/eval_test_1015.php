<?php
// Eval injection test variation #1015
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>