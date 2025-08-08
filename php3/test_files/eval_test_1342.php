<?php
// Eval injection test variation #1342
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>