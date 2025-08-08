<?php
// Eval injection test variation #1304
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>