<?php
// Eval injection test variation #1086
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>