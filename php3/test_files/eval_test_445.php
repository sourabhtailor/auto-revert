<?php
// Eval injection test variation #445
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>