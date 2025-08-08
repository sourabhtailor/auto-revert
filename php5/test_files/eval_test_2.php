<?php
// Eval injection test variation #2
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>