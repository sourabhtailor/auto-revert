<?php
// Eval injection test variation #1284
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>