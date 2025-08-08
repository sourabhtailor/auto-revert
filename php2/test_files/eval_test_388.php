<?php
// Eval injection test variation #388
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>