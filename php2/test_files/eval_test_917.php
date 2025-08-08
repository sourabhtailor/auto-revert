<?php
// Eval injection test variation #917
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>