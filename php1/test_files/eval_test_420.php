<?php
// Eval injection test variation #420
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>