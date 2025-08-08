<?php
// Eval injection test variation #1225
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>