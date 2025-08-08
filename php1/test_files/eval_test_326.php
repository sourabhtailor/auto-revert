<?php
// Eval injection test variation #326
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>