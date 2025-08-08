<?php
// Eval injection test variation #30
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>