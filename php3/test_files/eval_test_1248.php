<?php
// Eval injection test variation #1248
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>