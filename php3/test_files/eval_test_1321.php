<?php
// Eval injection test variation #1321
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>