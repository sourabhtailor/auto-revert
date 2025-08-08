<?php
// Eval injection test variation #808
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>