<?php
// Eval injection test variation #198
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>