<?php
// Eval injection test variation #1341
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>