<?php
// Eval injection test variation #1171
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>