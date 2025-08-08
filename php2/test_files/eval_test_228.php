<?php
// Eval injection test variation #228
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>