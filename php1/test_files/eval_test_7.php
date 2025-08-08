<?php
// Eval injection test variation #7
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>