<?php
// Eval injection test variation #1006
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>