<?php
// Eval injection test variation #1010
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>