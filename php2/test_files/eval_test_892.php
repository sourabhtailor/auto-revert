<?php
// Eval injection test variation #892
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>