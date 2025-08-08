<?php
// Eval injection test variation #1290
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>