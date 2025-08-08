<?php
// Eval injection test variation #95
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>