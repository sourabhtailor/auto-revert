<?php
// Eval injection test variation #924
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>