<?php
// Eval injection test variation #1151
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>