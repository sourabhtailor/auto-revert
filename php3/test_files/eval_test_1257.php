<?php
// Eval injection test variation #1257
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>