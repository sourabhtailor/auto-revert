<?php
// Eval injection test variation #1363
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>