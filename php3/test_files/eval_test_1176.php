<?php
// Eval injection test variation #1176
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>