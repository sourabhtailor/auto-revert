<?php
// Eval injection test variation #294
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>