<?php
// Eval injection test variation #538
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>