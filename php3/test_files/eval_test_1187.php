<?php
// Eval injection test variation #1187
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>