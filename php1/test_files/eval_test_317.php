<?php
// Eval injection test variation #317
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>