<?php
// Eval injection test variation #1399
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>