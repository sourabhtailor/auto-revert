<?php
// Eval injection test variation #1229
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>