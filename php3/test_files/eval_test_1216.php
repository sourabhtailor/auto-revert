<?php
// Eval injection test variation #1216
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>