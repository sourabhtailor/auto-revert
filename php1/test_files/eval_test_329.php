<?php
// Eval injection test variation #329
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>