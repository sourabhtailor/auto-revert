<?php
// Eval injection test variation #800
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>